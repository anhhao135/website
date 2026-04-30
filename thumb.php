<?php
/**
 * thumb.php — On-demand image resizer with disk cache.
 *
 * Usage: /thumb.php?src=images/path/image.jpg&w=800&q=82
 *   src  — path relative to site root (must be inside images/)
 *   w    — output width in pixels (default 800, max 3000)
 *   q    — JPEG/WebP quality 30–95 (default 82)
 *
 * Outputs WebP if the browser sends Accept: image/webp, JPEG otherwise.
 * Cached thumbnails live in cache/ and are reused until the source file changes.
 */

$src = isset($_GET['src']) ? trim((string)$_GET['src']) : '';
$w   = isset($_GET['w'])   ? min(3000, max(50, (int)$_GET['w'])) : 800;
$q   = isset($_GET['q'])   ? min(95,   max(30, (int)$_GET['q'])) : 82;

if ($src === '') { http_response_code(400); exit; }

// ── Security: path must resolve inside an allowed directory ──
$allowedRoots = ['images', 'research_iebl', 'research_unity'];
$src          = ltrim($src, '/\\');
$absPath      = realpath(__DIR__ . '/' . $src);
$allowed      = false;
foreach ($allowedRoots as $dir) {
    $root = realpath(__DIR__ . '/' . $dir);
    if ($root && $absPath && strncmp($absPath, $root, strlen($root)) === 0) {
        $allowed = true;
        break;
    }
}
if (!$allowed || !$absPath || !is_file($absPath)) {
    http_response_code(404); exit;
}

$ext = strtolower(pathinfo($absPath, PATHINFO_EXTENSION));
if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'], true)) {
    http_response_code(403); exit;
}

// ── Output format ────────────────────────────────────────────
$wantWebp  = isset($_SERVER['HTTP_ACCEPT']) && strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false
             && function_exists('imagewebp');
$outExt  = $wantWebp ? 'webp' : 'jpg';
$outMime = $wantWebp ? 'image/webp' : 'image/jpeg';

// ── Cache ────────────────────────────────────────────────────
$cacheDir  = __DIR__ . '/cache';
$cacheKey  = md5($absPath . '|' . $w . '|' . $q . '|' . $outExt);
$cacheFile = $cacheDir . '/' . $cacheKey . '.' . $outExt;
$srcMtime  = filemtime($absPath);

$etag = '"' . substr(md5($absPath . $srcMtime . $w . $q . $outExt), 0, 16) . '"';

header('Cache-Control: public, max-age=31536000, immutable');
header('ETag: ' . $etag);
header('Vary: Accept');

if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && trim($_SERVER['HTTP_IF_NONE_MATCH']) === $etag) {
    http_response_code(304); exit;
}

if (!is_dir($cacheDir)) @mkdir($cacheDir, 0755, true);

// Serve from disk cache if present and fresh
if (file_exists($cacheFile) && filemtime($cacheFile) >= $srcMtime) {
    header('Content-Type: ' . $outMime);
    header('X-Cache: HIT');
    readfile($cacheFile);
    exit;
}

// ── GD unavailable: serve original ──────────────────────────
if (!extension_loaded('gd')) {
    $mime = ($ext === 'jpg' || $ext === 'jpeg') ? 'image/jpeg' : 'image/' . $ext;
    header('Content-Type: ' . $mime);
    header('X-Cache: MISS-NOGD');
    readfile($absPath);
    exit;
}

// ── Resize ───────────────────────────────────────────────────
$info = @getimagesize($absPath);
if (!$info) { http_response_code(415); exit; }

[$origW, $origH, $type] = $info;

$newW = min($w, $origW);                          // never upscale
$newH = (int)round($newW * $origH / $origW);

$srcImg = null;
switch ($type) {
    case IMAGETYPE_JPEG: $srcImg = imagecreatefromjpeg($absPath); break;
    case IMAGETYPE_PNG:  $srcImg = imagecreatefrompng($absPath);  break;
    case IMAGETYPE_GIF:  $srcImg = imagecreatefromgif($absPath);  break;
    case IMAGETYPE_WEBP:
        if (function_exists('imagecreatefromwebp')) {
            $srcImg = imagecreatefromwebp($absPath);
        }
        break;
}

if (!$srcImg) {
    // Format not supported by this GD build — serve original
    $mime = ($ext === 'jpg' || $ext === 'jpeg') ? 'image/jpeg' : 'image/' . $ext;
    header('Content-Type: ' . $mime);
    readfile($absPath);
    exit;
}

$dst = imagecreatetruecolor($newW, $newH);

// White matte for images with transparency (PNG/GIF converted to JPEG)
if (!$wantWebp) {
    $bg = imagecolorallocate($dst, 255, 255, 255);
    imagefill($dst, 0, 0, $bg);
}

imagecopyresampled($dst, $srcImg, 0, 0, 0, 0, $newW, $newH, $origW, $origH);
imagedestroy($srcImg);

// Save to cache
if ($wantWebp) {
    imagewebp($dst, $cacheFile, $q);
} else {
    imagejpeg($dst, $cacheFile, $q);
}

imagedestroy($dst);

header('Content-Type: ' . $outMime);
header('X-Cache: MISS');
readfile($cacheFile);
