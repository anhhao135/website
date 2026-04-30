<?php
$config = ['title' => '404 — HAO LE', 'desc' => 'Page not found', 'active' => ''];
require __DIR__ . '/includes/head.php';
?>

  <style>
    .not-found {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      gap: 20px;
    }
    .not-found-num {
      font-size: clamp(80px, 18vw, 200px);
      font-weight: 300;
      letter-spacing: -0.04em;
      line-height: 1;
      color: var(--faint);
    }
    .not-found-msg  { font-size: 14px; color: var(--mid); }
    .not-found-back { font-size: 14px; transition: opacity 0.2s; }
    .not-found-back:hover { opacity: 0.6; }
  </style>

  <div class="not-found">
    <span class="not-found-num">404</span>
    <p class="not-found-msg">Page not found.</p>
    <a href="/" class="not-found-back">← Back home</a>
  </div>

<?php require __DIR__ . '/includes/footer.php'; ?>
