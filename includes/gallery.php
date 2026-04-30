<?php
/**
 * Gallery utilities — scan a directory for images, generate thumb URLs.
 * Drop images into a folder; the page renders them automatically.
 *
 * Supported formats: jpg · jpeg · png · gif · webp · avif
 * Naming tip: "01-forest-2024.jpg" → title "Forest", year 2024 auto-extracted
 */

function scan_images(string $dir): array {
    if (!is_dir($dir)) return [];
    $exts  = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'avif'];
    $files = [];
    foreach (new DirectoryIterator($dir) as $entry) {
        if ($entry->isDot() || !$entry->isFile()) continue;
        if (in_array(strtolower($entry->getExtension()), $exts, true)) {
            $files[] = $entry->getFilename();
        }
    }
    natsort($files);   // natural sort so "10-x" comes after "9-x"
    return array_values($files);
}

function filename_to_title(string $filename): string {
    $name = pathinfo($filename, PATHINFO_FILENAME);
    $name = preg_replace('/^\d+[-_\s]+/', '', $name); // strip leading "01-"
    return ucwords(str_replace(['-', '_'], ' ', $name));
}

function extract_year(string $filename): string {
    preg_match('/\b(20\d{2}|19\d{2})\b/', $filename, $m);
    return $m[1] ?? '';
}

// Warm-neutral placeholder colors shown while images decode
$_PH = ['#dddcd6', '#d8d7d1', '#d3d2cb', '#d6d5ce', '#dbd9d3', '#d0cfc9'];

function ph_color(int $i): string {
    global $_PH;
    return $_PH[$i % count($_PH)];
}

// Build a URL to the thumb proxy for a given relative image path
function thumb_url(string $rel_path, int $w = 800, int $q = 82): string {
    return '/thumb.php?src=' . rawurlencode($rel_path) . '&w=' . $w . '&q=' . $q;
}
