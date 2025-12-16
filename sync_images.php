<?php
/**
 * Sync + compress images from a source directory into a compressed directory.
 * Automatically invalidates when compression quality or engine changes.
 *
 * Safe to call on every request.
 *
 * @param string $srcDir       Absolute filesystem path to originals
 * @param string $dstDir       Absolute filesystem path to compressed output
 * @param int    $jpegQuality  JPEG quality (0–100)
 */
function sync_images(string $srcDir, string $dstDir, int $jpegQuality = 75): void
{
    // Normalize paths
    $srcDir = rtrim($srcDir, DIRECTORY_SEPARATOR);
    $dstDir = rtrim($dstDir, DIRECTORY_SEPARATOR);

    if (!is_dir($srcDir)) {
        return;
    }

    /* -----------------------------
       LOCK (prevent concurrent runs)
    ----------------------------- */

    $lockFile = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'sync_images.lock';
    $lock = fopen($lockFile, 'c');
    if (!$lock || !flock($lock, LOCK_EX | LOCK_NB)) {
        return;
    }

    /* -----------------------------
       ENSURE DESTINATION EXISTS
    ----------------------------- */

    if (!is_dir($dstDir)) {
        mkdir($dstDir, 0755, true);
    }

    /* -----------------------------
       BUILD SIGNATURE (cache key)
    ----------------------------- */

    $engine = function_exists('imagecreatefromstring') ? 'gd' : 'imagemagick';

    $signature = json_encode([
        'quality' => $jpegQuality,
        'engine'  => $engine,
        'version' => 1, // bump if algorithm changes
    ], JSON_PRETTY_PRINT);

    $signatureFile = $dstDir . DIRECTORY_SEPARATOR . '.sync.json';
    $previousSignature = file_exists($signatureFile)
        ? file_get_contents($signatureFile)
        : null;

    $forceRebuild = ($previousSignature !== $signature);

    /* -----------------------------
       INVALIDATE ON SIGNATURE CHANGE
    ----------------------------- */

    if ($forceRebuild) {
        foreach (glob($dstDir . DIRECTORY_SEPARATOR . '*.{jpg,jpeg,png,webp}', GLOB_BRACE) as $file) {
            unlink($file);
        }
    }

    /* -----------------------------
       SYNC IMAGES
    ----------------------------- */

    $extensions = '{jpg,jpeg,png,webp}';
    $srcFiles = glob($srcDir . DIRECTORY_SEPARATOR . "*.$extensions", GLOB_BRACE);

    foreach ($srcFiles as $src) {
        $name = basename($src);
        $dst  = $dstDir . DIRECTORY_SEPARATOR . $name;

        // Skip if up-to-date and no forced rebuild
        if (!$forceRebuild && file_exists($dst) && filemtime($dst) >= filemtime($src)) {
            continue;
        }

        if ($engine === 'gd') {
            $data = @file_get_contents($src);
            if ($data === false) continue;

            $img = @imagecreatefromstring($data);
            if (!$img) continue;

            imagejpeg($img, $dst, $jpegQuality);
            imagedestroy($img);
        } else {
            $cmd = sprintf(
                'magick "%s" -strip -quality %d "%s"',
                $src,
                $jpegQuality,
                $dst
            );
            exec($cmd);
        }
    }

    /* -----------------------------
       REMOVE DELETED ORIGINALS
    ----------------------------- */

    $dstFiles = glob($dstDir . DIRECTORY_SEPARATOR . "*.$extensions", GLOB_BRACE);
    foreach ($dstFiles as $dst) {
        $src = $srcDir . DIRECTORY_SEPARATOR . basename($dst);
        if (!file_exists($src)) {
            unlink($dst);
        }
    }

    /* -----------------------------
       WRITE SIGNATURE + UNLOCK
    ----------------------------- */

    file_put_contents($signatureFile, $signature);

    flock($lock, LOCK_UN);
    fclose($lock);
}
