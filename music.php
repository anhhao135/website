<?php
/**
 * Music — SoundCloud profile embed + optional album art grid.
 * Album art is auto-scanned from images/music/ (drop files there to populate).
 */
require_once __DIR__ . '/includes/gallery.php';

$config = ['title' => 'Music — HAO LE', 'desc' => 'Music by Hao Le', 'active' => 'music', 'dark_header' => true];
$images = scan_images(__DIR__ . '/images/music');

require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner">HAO LE</span>
      <span class="page-num">03</span>
      <h1 class="page-title">Music</h1>
    </div>
  </header>

  <section class="music-section">
    <div class="container">

      <!-- ── SoundCloud embed ─────────────────────────────────────── -->
      <div class="sc-wrap reveal">
        <iframe
          class="sc-player"
          scrolling="no"
          frameborder="no"
          allow="autoplay"
          src="https://w.soundcloud.com/player/?url=https%3A//soundcloud.com/john_le&color=%23111110&auto_play=false&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=false&visual=true">
        </iframe>
        <div class="sc-credit">
          <a href="https://soundcloud.com/john_le" target="_blank" rel="noopener">
            Open on SoundCloud →
          </a>
        </div>
      </div>

      <!-- ── Album art grid (auto-filled from images/music/) ─────── -->
      <?php if (!empty($images)): ?>
        <div class="music-grid">
          <?php foreach ($images as $i => $file):
            $title = filename_to_title($file);
            $year  = extract_year($file);
            $src   = 'images/music/' . $file;
          ?>
            <article class="music-item reveal">
              <div class="music-art" style="background:<?= ph_color($i) ?>">
                <img loading="lazy"
                     src="<?= htmlspecialchars(thumb_url($src, 600, 85)) ?>"
                     alt="<?= htmlspecialchars($title) ?>">
              </div>
              <h3 class="music-title"><?= htmlspecialchars($title) ?></h3>
              <?php if ($year): ?>
                <p class="music-sub"><?= htmlspecialchars($year) ?></p>
              <?php endif; ?>
            </article>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
