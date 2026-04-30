<?php
/**
 * Engineering — to reorder projects, move entries in $projects.
 * Numbers are assigned automatically by position.
 */
require_once __DIR__ . '/includes/gallery.php';

$config = ['title' => 'Engineering — HAO LE', 'desc' => 'Engineering projects by Hao Le', 'active' => 'engineering', 'dark_header' => true];

$projects = [
  [
    'img'   => 'research_iebl/thumbnail.png',
    'alt'   => 'Wireless Neuromonitoring System',
    'title' => 'Wireless Neuromonitoring System',
    'desc'  => 'Hardware and firmware engineer on an NIH BRAIN Initiative–funded project at
                Prof. Shadi Dayeh\'s IEBL lab, UC San Diego. Built a portable, wireless
                6,144-channel neural acquisition system for epilepsy patients — comprising
                a custom carrier card, SerDes depth links, and surface implant adapter,
                all orchestrated by a Xilinx K26 SoM running PetaLinux and OpenEphys.
                Validated in animal trials.',
    'link'  => '/iebl-neuromonitoring.php',
  ],
  [
    'img'   => 'images/engineering/opamp-cover.png',
    'alt'   => '180nm CMOS Op-Amp Design',
    'title' => '180nm CMOS Op-Amp Design',
    'desc'  => 'Designed a 180nm CMOS operational amplifier capable of over 80 dB of gain
                and 35 MHz of bandwidth for UCSD ECE 164 (Fall 2022). The architecture
                combines a folded cascode with a common source amplifier stage, biased
                via a constant-transconductance reference circuit with current mirroring.
                Design verified in Cadence Virtuoso. Selected to present from ~50 participants
                and awarded 2nd place by an Apple engineers panel.',
    'link'  => '/op-amp-design.php',
  ],
  [
    'img'   => 'images/engineering/synthetic-collage.png',
    'alt'   => 'Synthetic Data Research',
    'title' => 'Synthetic Data Research',
    'desc'  => 'Research into using Unity3D as a versatile synthetic data generation platform
                for Advanced Driver Assistance Systems. Built an automated pipeline leveraging
                Unity\'s scripting and physics engine to produce RGB-D images, Velodyne-like
                point clouds, 2D/3D bounding boxes, and pixel-accurate ground truth — all
                without expensive real-world data collection. A single RTX 2080 Ti achieves
                5 Hz generation with full environmental control over lighting, weather, and
                scene context. Preliminary results show synthetic data boosts 2D object
                detection performance with the same generalizing capability as real datasets.',
    'link'  => '/synthetic-data-research.php',
  ],
];

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

        <?php foreach ($projects as $i => $p): ?>
        <article class="project-item reveal">
          <div class="project-img" style="background:<?= ph_color($i) ?>">
            <img loading="lazy"
                 src="<?= htmlspecialchars(thumb_url($p['img'], 1000, 85)) ?>"
                 alt="<?= htmlspecialchars($p['alt']) ?>">
          </div>
          <div class="project-info">
            <span class="project-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
            <h3 class="project-title"><?= htmlspecialchars($p['title']) ?></h3>
            <p class="project-desc"><?= htmlspecialchars($p['desc']) ?></p>
            <a href="<?= htmlspecialchars($p['link']) ?>" class="project-link">View Project →</a>
          </div>
        </article>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
