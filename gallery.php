<?php
require_once __DIR__ . '/sync_images.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <style>
        img {
            max-width: 300px;
            margin: 10px;
        }
    </style>
</head>
<body>

<?php
$imgs = glob(__DIR__ . '/gallery/compressed/*.{jpg,jpeg,png,webp}', GLOB_BRACE);
foreach ($imgs as $img) {
    $url = str_replace(__DIR__, '', $img);
    echo "<img src=\"$url\">";
}
?>

</body>
</html>
