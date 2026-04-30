<?php
/**
 * Art gallery — auto-populated from images/art/gallery/
 * To add work: drop an image file in that directory.
 * Filename becomes the title: "03-forest-study-2024.jpg" → "Forest Study", year 2024
 */
require_once __DIR__ . '/includes/gallery.php';

$config = ['title' => 'Art — HAO LE', 'desc' => 'Art by Hao Le', 'active' => 'art', 'dark_header' => true];
$images = scan_images(__DIR__ . '/images/art/gallery');
shuffle($images);

require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner">HAO LE</span>
      <span class="page-num">01</span>
      <h1 class="page-title">Art</h1>
    </div>
  </header>

  <section class="gallery-section">
    <div class="container">

      <?php if (empty($images)): ?>
        <p class="empty-state">
          No images yet — add <code>.jpg</code>, <code>.png</code>, or <code>.webp</code>
          files to <code>images/art/gallery/</code>.
        </p>

      <?php else: ?>
        <!-- ── To add a piece: drop a file into images/art/gallery/ ── -->
        <div class="gallery-grid">
          <?php foreach ($images as $i => $file):
            $title = filename_to_title($file);
            $year  = extract_year($file);
            $src   = 'images/art/gallery/' . $file;
          ?>
            <article class="work-item reveal">
              <a href="#"
                 class="work-link"
                 data-full="<?= htmlspecialchars(thumb_url($src, 1600, 90)) ?>">
                <div class="work-img" style="background:<?= ph_color($i) ?>">
                  <img loading="lazy"
                       src="<?= htmlspecialchars(thumb_url($src, 720, 82)) ?>"
                       alt="<?= htmlspecialchars($title) ?>">
                  <div class="work-overlay"><span>View</span></div>
                </div>
                <div class="work-meta">
                  <h3 class="work-title"><?= htmlspecialchars($title) ?></h3>
                  <?php if ($year): ?>
                    <span class="work-year"><?= htmlspecialchars($year) ?></span>
                  <?php endif; ?>
                </div>
              </a>
            </article>
          <?php endforeach; ?>
        </div>

      <?php endif; ?>
    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
