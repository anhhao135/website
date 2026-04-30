<?php
$page_title = 'Music';
require_once 'includes/config.php';
include 'includes/header.php';
?>

<div class="wrap">
  <div class="music-wrap">
    <span class="cassette">&#128956;</span>

    <div class="music-photo-main">
      <div class="music-label">Recording</div>
      <img src="/img/aboutMe/DSC00860.jpeg" alt="Recording" loading="eager" decoding="async">
    </div>

    <div class="music-aside">
      <div>
        <div class="music-label">Performance</div>
        <img src="/img/aboutMe/music-cover.jpeg" alt="Music" loading="lazy" decoding="async">
      </div>
      <p class="music-desc">"Music I make from time to time."</p>
      <div class="music-glass">
        <div class="music-label">Listening to lately</div>
        <p>Novo Amor, Sufjan Stevens,<br>Claude Debussy</p>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
