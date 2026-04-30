<?php
require_once __DIR__ . '/includes/gallery.php';

$config   = ['title' => 'HAO LE', 'desc' => 'Hao Le — Art, Engineering, Music', 'active' => '', 'dark_header' => true];
$featured    = scan_images(__DIR__ . '/images/art/featured');
shuffle($featured);
$total       = max(1, count($featured));
$le_fill_url = !empty($featured)
    ? thumb_url('images/art/featured/' . $featured[array_rand($featured)], 1200, 88)
    : null;

require __DIR__ . '/includes/head.php';
?>

  <!-- ── Hero Slideshow ──────────────────────────────────────
       Drop images into images/art/featured/ to populate the slideshow.
       Files are sorted naturally (01-title.jpg, 02-title.jpg, …).      -->
  <section id="hero">
    <div class="slideshow">

      <?php if (empty($featured)): ?>
        <div class="slide active" style="--slide-bg: #111">
          <div class="slide-caption">
            <span class="slide-num">—</span>
            <span class="slide-title">Add images to images/art/featured/</span>
          </div>
        </div>

      <?php else: foreach ($featured as $i => $file):
          $title = filename_to_title($file);
          $src   = 'images/art/featured/' . $file;
      ?>
        <div class="slide<?= $i === 0 ? ' active' : '' ?>" style="--slide-bg: #111">
          <div class="slide-blur" style="background-image:url('<?= thumb_data_uri(__DIR__ . '/' . $src) ?>')"></div>
          <img src="<?= htmlspecialchars(thumb_url($src, 1920, 88)) ?>"
               alt="<?= htmlspecialchars($title) ?>">
          <div class="slide-caption">
            <span class="slide-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
            <span class="slide-title"><?= htmlspecialchars($title) ?></span>
          </div>
        </div>
      <?php endforeach; endif; ?>

    </div>

    <div class="slide-controls">
      <div class="slide-dots">
        <?php foreach ($featured as $i => $file): ?>
          <button class="dot<?= $i === 0 ? ' active' : '' ?>"
                  data-index="<?= $i ?>"
                  aria-label="Slide <?= $i + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
      <div class="slide-arrows">
        <button class="slide-arrow slide-prev" aria-label="Previous slide">&#8592;</button>
        <div class="slide-counter">
          <span class="slide-current">01</span>
          <span class="slide-sep">/</span>
          <span class="slide-total"><?= str_pad($total, 2, '0', STR_PAD_LEFT) ?></span>
        </div>
        <button class="slide-arrow slide-next" aria-label="Next slide">&#8594;</button>
      </div>
    </div>
  </section>

  <!-- ── Name + Intro ──────────────────────────────────────── -->
  <section id="intro">
    <div class="container">
      <?php
        $le_cls   = $le_fill_url ? 'text-art' : 'text-stroke';
        $le_style = $le_fill_url ? ' style="background-image:url(\'' . htmlspecialchars($le_fill_url) . '\')"' : '';
      ?>
      <h1 class="site-name reveal">HAO <span class="<?= $le_cls ?>"<?= $le_style ?>>LE</span></h1>
      <p class="intro-text reveal">Art, engineering, and music —<br>a portfolio of creative and technical work.</p>
    </div>
  </section>

  <!-- ── Section Cards ─────────────────────────────────────── -->
  <section id="section-links">
    <div class="container grid-3">

      <a href="/art.php" class="section-card reveal">
        <span class="section-label">01</span>
        <h2>Art</h2>
        <span class="arrow">→</span>
      </a>

      <a href="/engineering.php" class="section-card reveal">
        <span class="section-label">02</span>
        <h2>Engineering</h2>
        <span class="arrow">→</span>
      </a>

      <a href="/music.php" class="section-card reveal">
        <span class="section-label">03</span>
        <h2>Music</h2>
        <span class="arrow">→</span>
      </a>

    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
