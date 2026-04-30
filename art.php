<?php
/**
 * art.php — Main Works (museum layout)
 * Add new work: prepend entry to $works, put image in /art-dir/
 */
$page_title = 'Art';
require_once 'includes/config.php';
include 'includes/header.php';

$works = [
  [
    'file'   => 'untitled_2023.png',
    'title'  => 'Untitled',
    'medium' => 'Oil on canvas',
    'year'   => 2023,
  ],
  [
    'file'   => 'half-dome.jpg',
    'title'  => 'Half Dome',
    'medium' => 'Oil on canvas',
    'year'   => 2023,
  ],
  [
    'file'   => 'emigrate.jpg',
    'title'  => 'Emigrate',
    'medium' => 'Oil on canvas',
    'year'   => 2021,
  ],
  [
    'file'   => 'indoor-gathering.png',
    'title'  => 'Indoor Gathering',
    'medium' => 'Oil on two canvases',
    'year'   => 2022,
  ],
  [
    'file'   => 'lisas-mural-with-me.jpg',
    'title'  => "Lisa's Mural",
    'medium' => 'Acrylic on wall',
    'year'   => 2022,
  ],
  [
    'file'   => 'not-seeing-is-a-flower.jpg',
    'title'  => 'Not Seeing is a Flower',
    'medium' => 'Dried flowers, oil on canvas',
    'year'   => 2018,
  ],
  [
    'file'   => 'pixels.jpg',
    'title'  => 'Compressed',
    'medium' => 'Graphite on paper',
    'year'   => 2020,
  ],
  [
    'file'   => 'self-portrait-in-garden.jpg',
    'title'  => 'Self-portrait in Garden',
    'medium' => 'Gold leaf, oil on canvas',
    'year'   => 2019,
  ],
  [
    'file'   => 'study-of-structure-1.jpg',
    'title'  => 'Study of Structure I',
    'medium' => 'Ink on paper',
    'year'   => 2019,
  ],
  [
    'file'   => 'study-of-structure-2.jpg',
    'title'  => 'Study of Structure II',
    'medium' => 'Ink on paper',
    'year'   => 2019,
  ],
  [
    'file'   => 'novo-amor.jpg',
    'title'  => 'Novo Amor',
    'medium' => 'Watercolor on paper',
    'year'   => 2018,
  ],
];
$total = count($works);
?>

<div class="wrap">
  <div class="art-header">
    <h1>Works</h1>
    <span class="art-count"><?= $total ?> pieces · 2018–<?= max(array_column($works, 'year')) ?></span>
  </div>

  <nav class="sub-nav">
    <a href="/art.php" class="active">Works</a>
    <a href="/art-studies.php">Studies</a>
  </nav>

  <div class="museum-list">
    <?php foreach ($works as $i => $w): ?>
    <div class="museum-item">
      <div class="museum-img-wrap">
        <span class="museum-idx"><?= str_pad($i+1, 2, '0', STR_PAD_LEFT) ?> / <?= str_pad($total, 2, '0', STR_PAD_LEFT) ?></span>
        <img
          src="/art-dir/<?= rawurlencode($w['file']) ?>"
          alt="<?= htmlspecialchars($w['title']) ?>"
          loading="<?= $i < 2 ? 'eager' : 'lazy' ?>"
          decoding="async"
        >
        <span class="cutout-mark">&ldquo;</span>
      </div>
      <div class="museum-caption">
        <em><?= htmlspecialchars($w['title']) ?></em>
        <small><?= htmlspecialchars($w['medium']) ?> &nbsp;&middot;&nbsp; <?= $w['year'] ?></small>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
