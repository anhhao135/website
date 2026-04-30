<?php
require_once __DIR__ . '/includes/gallery.php';
$config = ['title' => '180nm CMOS Op-Amp — HAO LE', 'desc' => '180nm CMOS Op-Amp Design by Hao Le', 'active' => 'engineering', 'dark_header' => true];
require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner"><a href="/engineering.php">Engineering</a></span>
      <span class="page-num">01</span>
      <h1 class="page-title">180nm CMOS<br>Op-Amp<br>Design</h1>
    </div>
  </header>

  <section class="project-detail">
    <div class="container">

      <!-- Overview -->
      <div class="pd-overview reveal">
        <div class="pd-text">
          <p>
            I designed a 180nm CMOS technology operational amplifier capable of over 80 dB of gain
            and 35 MHz of bandwidth. Additionally, ample phase and gain margins ensure closed-loop
            stability. This project was part of UCSD's ECE 164 class during fall 2022.
          </p>
          <p>
            The circuit combines a folded cascode and common source amplifier stage to realize high
            overall gain. Margin performance was tunable with a compensation resistor and capacitor.
            All MOSFETs were biased with a constant-transconductance reference circuit whose output
            current was mirrored downstream. Gate voltages were biased ratiometrically with stacked
            MOSFET arrangements. Design performance was verified in Cadence Virtuoso.
          </p>
          <p>
            Six groups were chosen out of roughly 50 to present their designs in front of a panel
            of Apple engineers. I was awarded 2nd place — an Apple Watch! Though my performance was
            not the absolute best, the judges saw merit in my design methodology. Thanks, Apple!
          </p>
          <div class="pd-actions">
            <a href="/ECE164_Project/ECE164_Project.pdf" target="_blank" rel="noopener" class="pd-btn">Read the Report →</a>
          </div>
        </div>
        <div class="pd-cover">
          <img src="<?= htmlspecialchars(thumb_url('images/engineering/opamp-apple-watch.jpg', 900, 88)) ?>"
               alt="Apple Watch 2nd place prize">
        </div>
      </div>

      <!-- YouTube demo -->
      <div class="pd-media reveal">
        <div class="pd-media-label">Design Walkthrough</div>
        <div class="pd-video-wrap">
          <iframe src="https://www.youtube.com/embed/YIbez8hiVc0"
                  title="180nm CMOS Op-Amp Design Walkthrough"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                  allowfullscreen></iframe>
        </div>
      </div>

      <!-- Specs -->
      <div class="pd-specs reveal">
        <h2 class="pd-section-title">Specifications</h2>
        <div class="pd-spec-grid">
          <div class="pd-spec"><span class="pd-spec-val">&gt; 80 dB</span><span class="pd-spec-key">Gain</span></div>
          <div class="pd-spec"><span class="pd-spec-val">35 MHz</span><span class="pd-spec-key">Bandwidth</span></div>
          <div class="pd-spec"><span class="pd-spec-val">180 nm</span><span class="pd-spec-key">CMOS node</span></div>
          <div class="pd-spec"><span class="pd-spec-val">2nd place</span><span class="pd-spec-key">Apple panel</span></div>
        </div>
      </div>

    </div>
  </section>

  <div class="pd-back container">
    <a href="/engineering.php" class="project-link">← Back to Engineering</a>
  </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
