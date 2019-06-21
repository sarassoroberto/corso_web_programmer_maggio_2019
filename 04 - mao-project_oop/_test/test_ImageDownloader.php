<?php
// require "../autoload.php"; // custom autoload
require "./utility/memory_usage.php"; // composer autoload
require "../vendor/autoload.php"; // composer autoload

$imageSet = [
    'http://93.62.170.226/foto/1110_B.jpg',
    'http://93.62.170.226/foto/gam/Morelli/Leg1-02.jpg'
];

$imagedownloader = new ImageDownloader();
foreach ($imageSet as $image) {
    echo "immagine: $image\n";
    $imagedownloader->open($image);
}
