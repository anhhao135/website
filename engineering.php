<?php
/**
 * Engineering — edit this file to add/update projects.
 * Add project images to images/engineering/ and update the src paths below.
 */
require_once __DIR__ . '/includes/gallery.php';

$config = ['title' => 'Engineering — HAO LE', 'desc' => 'Engineering projects by Hao Le', 'active' => 'engineering', 'dark_header' => true];

require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner">HAO LE</span>
      <span class="page-num">02</span>
      <h1 class="page-title">Engineering</h1>
    </div>
  </header>

  <section class="projects-section">
    <div class="container">
      <div class="projects-list">

        <!-- ── To add a project: copy one <article> block,
             fill in the details, and add its image to images/engineering/ ── -->

        <article class="project-item reveal">
          <div class="project-img" style="background:<?= ph_color(0) ?>">
            <img loading="lazy"
                 src="<?= htmlspecialchars(thumb_url('images/engineering/opamp-cover.png', 1000, 85)) ?>"
                 alt="180nm CMOS Op-Amp Design">
          </div>
          <div class="project-info">
            <span class="project-num">01</span>
            <h3 class="project-title">180nm CMOS Op-Amp Design</h3>
            <p class="project-desc">
              Designed a 180nm CMOS operational amplifier capable of over 80 dB of gain
              and 35 MHz of bandwidth for UCSD ECE 164 (Fall 2022). The architecture
              combines a folded cascode with a common source amplifier stage, biased
              via a constant-transconductance reference circuit with current mirroring.
              Design verified in Cadence Virtuoso. Selected to present from ~50 participants
              and awarded 2nd place by an Apple engineers panel.
            </p>
            <a href="/op-amp-design.php" class="project-link">View Project →</a>
          </div>
        </article>

        <article class="project-item reveal">
          <div class="project-img" style="background:<?= ph_color(1) ?>">
            <img loading="lazy"
                 src="<?= htmlspecialchars(thumb_url('images/engineering/synthetic-collage.png', 1000, 85)) ?>"
                 alt="Synthetic Data Research">
          </div>
          <div class="project-info">
            <span class="project-num">02</span>
            <h3 class="project-title">Synthetic Data Research</h3>
            <p class="project-desc">
              Research into using Unity3D as a versatile synthetic data generation platform
              for Advanced Driver Assistance Systems. Built an automated pipeline leveraging
              Unity's scripting and physics engine to produce RGB-D images, Velodyne-like
              point clouds, 2D/3D bounding boxes, and pixel-accurate ground truth — all
              without expensive real-world data collection. A single RTX 2080 Ti achieves
              5 Hz generation with full environmental control over lighting, weather, and
              scene context. Preliminary results show synthetic data boosts 2D object
              detection performance with the same generalizing capability as real datasets.
            </p>
            <a href="/synthetic-data-research.php" class="project-link">View Project →</a>
          </div>
        </article>

      </div>
    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
