<?php
require_once __DIR__ . '/includes/gallery.php';

$config = ['title' => 'About — HAO LE', 'desc' => 'About Hao Le — Electrical Engineer, Artist, Musician', 'active' => 'about', 'dark_header' => true];

require __DIR__ . '/includes/head.php';
?>

  <header class="page-header">
    <div class="container">
      <span class="page-owner">HAO LE</span>
      <span class="page-num">04</span>
      <h1 class="page-title">About</h1>
    </div>
  </header>

  <section class="about-section">
    <div class="container">
      <div class="about-grid">

        <div class="about-photo" style="background:<?= ph_color(0) ?>">
          <!-- Add your portrait: images/about/portrait.jpg -->
          <img src="<?= htmlspecialchars(thumb_url('images/about/portrait.jpg', 900, 88)) ?>"
               alt="Hao Le">
        </div>

        <div class="about-content reveal">
          <h2>Hao Le</h2>

          <div class="about-bio">
            <p>
              Hello! Thanks for checking out my site. I don't get a lot of visitors
              so it's nice that you're here.
            </p>
            <p>
              I am currently an electrical engineer at
              <a href="https://www.serranosystems.com/" target="_blank" rel="noopener" class="inline-link">Serrano Systems.</a>
              I got my B.S. and M.S. degrees from UC San Diego, where I was a researcher
              at the <a href="http://iebl.ucsd.edu/" target="_blank" rel="noopener" class="inline-link">Integrated Electronics and Biointerfaces Lab</a>
              supervised by Dr. Shadi Dayeh.
            </p>
            <p>
              If I'm not home playing guitar, tending my garden, admiring my tarantulas,
              or decorating fish tanks, I'm probably somewhere really far away with my
              portable easel, painting nature in front of me.
            </p>
          </div>

          <div class="about-meta">
            <div class="about-meta-row">
              <span class="about-meta-label">Currently</span>
              <span>Electrical Engineer, Serrano Systems</span>
            </div>
            <div class="about-meta-row">
              <span class="about-meta-label">Education</span>
              <span>B.S. &amp; M.S., UC San Diego</span>
            </div>
            <div class="about-meta-row">
              <span class="about-meta-label">Research</span>
              <span>IEBL, UC San Diego — Dr. Shadi Dayeh</span>
            </div>
          </div>

          <div class="about-links">
            <a href="/resume.pdf" target="_blank" rel="noopener" class="about-link">Résumé</a>
            <a href="https://www.linkedin.com/in/hao-le-07b726132/" target="_blank" rel="noopener" class="about-link">LinkedIn</a>
            <a href="https://github.com/anhhao135" target="_blank" rel="noopener" class="about-link">GitHub</a>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php require __DIR__ . '/includes/footer.php'; ?>
