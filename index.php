<?php
/**
 * index.php — Homepage slideshow
 * Drop images into /index-slideshow/ to add them. PHP auto-scans.
 */
require_once 'includes/config.php';

$dir  = __DIR__ . '/index-slideshow/';
$exts = ['jpg','jpeg','png','gif','webp'];
$images = [];

if (is_dir($dir)) {
  foreach (scandir($dir) as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $exts) && $file[0] !== '.') {
      $images[] = $file;
    }
  }
  shuffle($images);
}

// Ghost text shown per slide (cycles through)
$ghost_words = ['Works', 'Studies', 'Plein air', 'Ink', 'Watercolor', 'Oil', 'Nature', 'Garden'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= SITE_NAME ?></title>
  <meta name="description" content="<?= SITE_NAME ?> — artist, engineer, musician.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,opsz,wght@0,6..144,400;1,6..144,400&family=Instrument+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body class="home">

<header class="site-header">
  <a class="wordmark" href="/index.php">
    <span class="wordmark-dot"></span>
    <span class="wordmark-text"><?= SITE_NAME ?></span>
  </a>
  <nav class="main-nav">
    <?php foreach ($NAV as $label => $href): ?>
      <a href="<?= $href ?>"><?= $label ?></a>
    <?php endforeach; ?>
  </nav>
  <button class="nav-toggle" aria-label="Toggle menu">&#9776;</button>
</header>

<main style="padding-top:0">
  <div class="slideshow-wrap">

    <?php foreach ($images as $i => $file): ?>
    <div class="slide <?= $i === 0 ? 'on' : '' ?>">
      <img
        src="/index-slideshow/<?= rawurlencode($file) ?>"
        alt=""
        <?= $i > 0 ? 'loading="lazy"' : '' ?>
        decoding="async"
      >
      <div class="slide-hero-text">
        <span><?= $ghost_words[$i % count($ghost_words)] ?></span>
      </div>
      <div class="slide-label"><?= htmlspecialchars(pathinfo($file, PATHINFO_FILENAME)) ?></div>
    </div>
    <?php endforeach; ?>

    <div class="ss-icon">&#9672;</div>
    <div class="ss-dots" id="ssdots"></div>

  </div>
</main>

<footer class="site-footer">
  <span class="footer-left"><?= SITE_NAME ?>, <?= SITE_YEAR ?>. Thanks for stopping by.</span>
  <div class="footer-links">
    <a href="https://github.com/anhhao135/website.git" target="_blank" rel="noopener">GitHub</a>
    <a href="https://www.linkedin.com/in/hao-le-07b726132/" target="_blank" rel="noopener">LinkedIn</a>
  </div>
</footer>

<script src="/js/main.js"></script>
</body>
</html>
