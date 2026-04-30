<?php
// includes/footer.php
$current = '/' . basename($_SERVER['PHP_SELF']);
$is_home = ($current === '/index.php');
?>
<?php if (!$is_home): ?>
</main>
<?php endif; ?>

<footer class="site-footer">
  <span class="footer-left"><?= SITE_NAME ?>, <?= SITE_YEAR ?>. Thanks for stopping by.</span>
  <div class="footer-links">
    <a href="https://github.com/anhhao135/website.git" target="_blank" rel="noopener">GitHub</a>
    <a href="https://www.linkedin.com/in/hao-le-07b726132/" target="_blank" rel="noopener">LinkedIn</a>
    <a href="/resume.pdf" target="_blank" rel="noopener">Résumé</a>
  </div>
</footer>

<!-- Lightbox -->
<div class="lightbox" id="lightbox">
  <button class="lightbox-close" aria-label="Close">&#x2715;</button>
  <img src="" alt="" id="lb-img">
</div>

<script src="/js/main.js"></script>
</body>
</html>
