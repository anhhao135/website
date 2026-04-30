<?php
$page_title = 'About';
require_once 'includes/config.php';
include 'includes/header.php';
?>

<div class="wrap">
  <div class="about-wrap">

    <div class="about-photo-wrap">
      <img class="about-photo"
           src="/img/aboutMe/plein-air.jpg"
           alt="Hao Le painting en plein air"
           loading="eager" decoding="async">
      <!-- floating glass card -->
      <div class="about-float">
        <div class="af-icon">&#128375;</div>
        <p>EE at Quartus Engineering · UCSD M.S. · paints plein air whenever possible</p>
      </div>
    </div>

    <div class="about-text reveal">
      <h2>Hello,<br>I'm Hao.</h2>

      <p>Thanks for checking out my site. I don't get a lot of visitors so it's nice that you're here.</p>

      <p>I am currently an electrical engineer at
        <a href="https://quartus.com/" target="_blank" rel="noopener">Quartus Engineering</a>.
        I got my B.S. and M.S. degrees from UC San Diego, where I was a researcher at the
        <a href="http://iebl.ucsd.edu/" target="_blank" rel="noopener">Integrated Electronics and Biointerfaces Lab</a>
        supervised by Dr.&nbsp;Shadi Dayeh.
      </p>

      <p>If I'm not home hanging out with my amazing
        <a href="/jordan.html">partner</a>,
        playing guitar, tending my garden, admiring my tarantulas,
        or decorating fish tanks — I'm probably somewhere really far away with
        my portable easel, painting nature right in front of me.
      </p>

      <p>
        Find me on <a href="https://github.com/anhhao135/website.git" target="_blank" rel="noopener">GitHub</a>,
        view my <a href="/resume.pdf" target="_blank" rel="noopener">résumé</a>,
        or connect on <a href="https://www.linkedin.com/in/hao-le-07b726132/" target="_blank" rel="noopener">LinkedIn</a>.
      </p>

      <div class="interest-pills">
        <span class="pill">Oil painting</span>
        <span class="pill">Plein air</span>
        <span class="pill">Guitar</span>
        <span class="pill">Tarantulas &#128375;</span>
        <span class="pill">Fish tanks &#128032;</span>
        <span class="pill">Gardening &#127807;</span>
        <span class="pill">Electrical engineering</span>
        <span class="pill">Biointerfaces</span>
      </div>
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>
