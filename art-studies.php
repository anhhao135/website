<?php
/**
 * art-studies.php — Sketchbook / Studies
 * Auto-scans /art-studies-dir/ — just drop images in to add them.
 */
$page_title = 'Studies';
require_once 'includes/config.php';
include 'includes/header.php';

$dir  = __DIR__ . '/art-studies-dir/';
$exts = ['jpg','jpeg','png','gif','webp'];
$imgs = [];

if (is_dir($dir)) {
  foreach (scandir($dir) as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, $exts) && $file[0] !== '.') {
      $imgs[] = $file;
    }
  }
  usort($imgs, fn($a,$b) => filemtime($dir.$b) <=> filemtime($dir.$a));
}
?>

<div class="wrap">
  <div class="art-header">
    <h1>Studies</h1>
    <span class="art-count">Sketchbook · ongoing</span>
  </div>

  <nav class="sub-nav">
    <a href="/art.php">Works</a>
    <a href="/art-studies.php" class="active">Studies</a>
  </nav>

  <div class="studies-intro">Sketchbook &amp; studies</div>

  <div class="studies-grid">
    <?php foreach ($imgs as $i => $file): ?>
    <div class="s-item">
      <img
        src="/art-studies-dir/<?= rawurlencode($file) ?>"
        alt=""
        loading="<?= $i < 6 ? 'eager' : 'lazy' ?>"
        decoding="async"
      >
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
