<?php
// includes/header.php
require_once __DIR__ . '/config.php';
$current = '/' . basename($_SERVER['PHP_SELF']);
$is_home = ($current === '/index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= SITE_NAME ?><?= isset($page_title) ? ' · ' . $page_title : '' ?></title>
  <meta name="description" content="<?= SITE_NAME ?> — artist, engineer, musician.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,opsz,wght@0,6..144,400;0,6..144,500;1,6..144,400&family=Instrument+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body<?= $is_home ? ' class="home"' : '' ?>>

<header class="site-header">
  <a class="wordmark" href="/index.php">
    <span class="wordmark-dot"></span>
    <span class="wordmark-text"><?= SITE_NAME ?></span>
  </a>
  <nav class="main-nav">
    <?php foreach ($NAV as $label => $href): ?>
      <a href="<?= $href ?>" class="<?= $current === $href ? 'active' : '' ?>">
        <?= $label ?>
      </a>
    <?php endforeach; ?>
  </nav>
  <button class="nav-toggle" aria-label="Toggle menu">&#9776;</button>
</header>

<?php if (!$is_home): ?>
<main>
<?php endif; ?>
