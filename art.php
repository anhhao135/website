<?php

$directory = 'art/works';
$originals_dir = __DIR__ . '/' . $directory . '/originals';
$compressed_dir = __DIR__ . '/' . $directory . '/compressed';

require_once __DIR__ . '/sync_images.php';

sync_images(
    $originals_dir,
    $compressed_dir,
    50
);

// URL path for images (THIS is what the browser uses)
$artDir = '/' . $directory . '/compressed';

$works = [
    ['file' => 'emigrate.jpg', 'alt' => 'Emigrate', 'text' => '"Emigrate"<br>oil on canvas, 2021'],
    ['file' => 'untitled_2023.png', 'alt' => 'Untitled', 'text' => '"Untitled"<br>oil on canvas, 2023'],
    ['file' => 'half-dome.jpg', 'alt' => 'Half Dome', 'text' => '"Half Dome"<br>oil on canvas, 2023'],
    ['file' => 'indoor-gathering.png', 'alt' => 'Indoor Gathering', 'text' => '"Indoor Gathering"<br>oil on two canvases, 2022'],
    ['file' => 'not-seeing-is-a-flower.jpg', 'alt' => 'Not Seeing is a Flower', 'text' => '"Not Seeing is a Flower"<br>dried flowers, oil on canvas, 2018'],
    ['file' => 'lisas-mural-with-me.jpg', 'alt' => "Lisa's Mural", 'text' => '"Lisa\'s Mural"<br>acrylic on wall, 2022'],
    ['file' => 'pixels.jpg', 'alt' => 'Interpolation', 'text' => '"Compressed"<br>graphite on paper, 2020'],
    ['file' => 'self-portrait-in-garden.jpg', 'alt' => 'Self-portrait in Garden', 'text' => '"Self-portrait in Garden"<br>gold leaf, oil on canvas, 2019'],
    ['file' => 'study-of-structure-1.jpg', 'alt' => 'Study of Structure 1', 'text' => '"Study of Structure I"<br>ink on paper, 2019'],
    ['file' => 'study-of-structure-2.jpg', 'alt' => 'Study of Structure 2', 'text' => '"Study of Structure II"<br>ink on paper, 2019'],
    ['file' => 'novo-amor.jpg', 'alt' => 'Novo Amor', 'text' => '"Novo Amor"<br>watercolor on paper, 2018'],
];

?>

<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Hao Le | Artworks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">

    <?php include("boilerplate/favicon.php") ?> 

 </head>
 <style>
 .container {
   position: relative;
   width: 95%;
 }

 .image {
   opacity: 1;
   display: block;
   width: 100%;
   height: auto;
   transition: .5s ease;
   backface-visibility: hidden;
 }

 .middle {
   transition: .5s ease;
   opacity: 0;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%, -50%);
   -ms-transform: translate(-50%, -50%);
   text-align: center;
 }

 .container:hover .image {
   opacity: 0.3;
 }

 .container:hover .middle {
   opacity: 1;
 }

 .text {
   background-color: #4CAF50;
   color: white;
   font-size: 16px;
   padding: 16px 32px;
   line-height: 1.2;
 }

 #side-nav-container{
  display:inline-block;
  background-color:#e3b578;
  text-align:left;
  padding: 25px; 
  align-self:start;
  width:fit-content;
  justify-self:center;
  margin:20px;
  font-size: 30px;
 }

 #page-container{
   display: inline-grid;
   grid-template-columns: 1.2fr 9fr;
   width: auto;
   margin-top:20px;
 }

 #side-nav ul li a{
   color:white;
 }

 #side-nav ul li{
   display:block;
   padding:5px;
 }

 #side-nav{
   display:block;
 }

 @media (max-width: 900px) {
  #side-nav-container{
    font-size: 20px;
    padding: 15px;
  }
  #page-container{
    grid-template-columns: 2fr 9fr;
  }
 }

 @media (max-width: 700px) {
  #page-container{
    grid-template-columns: 1fr;
  }
  #side-nav ul li{
    display:inline;
    vertical-align: middle;
    text-align: center;
  }
  #page-container{
    margin-top:0px;
  }
 }
 </style>

 <body>

 <?php include("boilerplate/header.php") ?> 

 <main>

  <div id="page-container">

    <div id="side-nav-container">
      <nav id="side-nav">
        <ul>
            <li><a href="art.php" style="font-weight:bold; color:#4CAF50;">WORKS</a></li>
            <li><a href="art-studies.php">STUDIES</a></li>
        </ul>
      </nav>
    </div>

    <div id="gallery">
      <div id="gallery-grid">

        <?php foreach ($works as $work): ?>
          <div class="container">
            <img src="<?= htmlspecialchars($artDir . '/' . $work['file']) ?>"
                 alt="<?= htmlspecialchars($work['alt']) ?>"
                 class="image"
                 style="width:100%">
            <div class="middle">
              <div class="text"><?= $work['text'] ?></div>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>

  </div>

 </main>

 <?php include("boilerplate/footer.php") ?> 

 </body>
</html>
