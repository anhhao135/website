<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= htmlspecialchars($config['desc'] ?? 'Hao Le — Art, Engineering, Music') ?>">
  <title><?= htmlspecialchars($config['title'] ?? 'HAO LE') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/css/style.css">
</head>
<body<?= !empty($config['dark_header']) ? ' class="dark-header"' : '' ?>>

  <nav id="nav">
    <a href="/" class="nav-logo">HAO LE</a>
    <button class="nav-toggle" aria-label="Toggle menu">
      <span></span><span></span>
    </button>
    <ul class="nav-links">
      <?php
        $nav = [
          'art'         => ['Art',         '/art.php'],
          'engineering' => ['Engineering', '/engineering.php'],
          'music'       => ['Music',       '/music.php'],
          'about'       => ['About',       '/about.php'],
        ];
        foreach ($nav as $key => [$label, $href]):
          $cls = ($config['active'] ?? '') === $key ? ' class="active"' : '';
      ?>
        <li><a href="<?= $href ?>"<?= $cls ?>><?= $label ?></a></li>
      <?php endforeach; ?>
    </ul>
  </nav>
