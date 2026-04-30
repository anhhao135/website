<?php
/**
 * everything-else.php
 * Add projects to $projects array below.
 */
$page_title = 'Everything Else';
require_once 'includes/config.php';
include 'includes/header.php';

$projects = [
  [
    'img'      => '/ECE164_Project/cover.png',
    'label'    => '180nm CMOS Op-Amp Design',
    'href'     => '/op-amp-design.php',
    'external' => false,
  ],
  [
    'img'      => '/img/synthetic_collage.png',
    'label'    => 'Synthetic Data Research',
    'href'     => '/synthetic-data-research.php',
    'external' => false,
  ],
  [
    'img'      => '/img/aboutMe/guitar.JPEG',
    'label'    => 'YouTube Channel &#x2197;',
    'href'     => 'https://youtube.com/404anhhao',
    'external' => true,
  ],
];
?>

<div class="wrap">
  <div class="art-header">
    <h1>Everything<br>Else</h1>
    <span class="art-count">Projects &amp; misc</span>
  </div>

  <div class="else-section-title">Projects</div>

  <div class="else-grid">
    <?php foreach ($projects as $p): ?>
    <div class="else-item">
      <a href="<?= $p['href'] ?>"
         <?= $p['external'] ? 'target="_blank" rel="noopener"' : '' ?>>
        <img
          src="<?= $p['img'] ?>"
          alt="<?= htmlspecialchars(strip_tags($p['label'])) ?>"
          loading="lazy" decoding="async"
        >
        <div class="else-item-label"><?= $p['label'] ?></div>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
