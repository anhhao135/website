<?php
/**
 * Art page — two auto-populated sections:
 *   Works   → images/art/featured/  (same images as the homepage slideshow)
 *   Studies → images/art/gallery/   (anything also in featured/ is skipped)
 * To add a piece: drop an image file into the matching directory.
 */
require_once __DIR__ . '/includes/gallery.php';

$config = ['title' => 'Art — HAO LE', 'desc' => 'Art by Hao Le', 'active' => 'art', 'dark_header' => true];

$works   = scan_images(__DIR__ . '/images/art/featured');
$in_works = array_map('strtolower', $works);
$studies = array_values(array_filter(
    scan_images(__DIR__ . '/images/art/gallery'),
    fn($f) => !in_array(strtolower($f), $in_works, true)
));
shuffle($works);
shuffle($studies);

$groups = [
    ['id' => 'works',   'title' => 'Works',   'dir' => 'images/art/featured', 'files' => $works],
    ['id' => 'studies', 'title' => 'Studies', 'dir' => 'images/art/gallery',  'files' => $studies],
];

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

      <?php foreach ($groups as $g): ?>
        <div class="art-group" id="<?= $g['id'] ?>">
          <div class="art-group-head">
            <h2 class="art-group-title"><?= $g['title'] ?></h2>
            <span class="art-group-count"><?= str_pad(count($g['files']), 2, '0', STR_PAD_LEFT) ?></span>
          </div>

          <?php if (empty($g['files'])): ?>
            <p class="empty-state">
              No images yet — add files to <code><?= $g['dir'] ?>/</code>.
            </p>

          <?php else: ?>
            <div class="gallery-grid">
              <?php foreach ($g['files'] as $i => $file):
                $src = $g['dir'] . '/' . $file;
              ?>
                <article class="work-item reveal">
                  <a href="#"
                     class="work-link"
                     data-full="<?= htmlspecialchars(thumb_url($src, 1600, 90)) ?>">
                    <div class="work-img" style="background:<?= ph_color($i) ?>">
                      <img loading="lazy"
                           src="<?= htmlspecialchars(thumb_url($src, 720, 82)) ?>"
                           alt="<?= htmlspecialchars(filename_to_title($file)) ?>">
                      <div class="work-overlay"><span>View</span></div>
                    </div>
                  </a>
                </article>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
