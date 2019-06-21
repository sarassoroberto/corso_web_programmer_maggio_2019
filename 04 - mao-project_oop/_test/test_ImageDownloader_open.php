<?php
// require "../autoload.php"; // custom autoload
require "./utility/memory_usage.php"; // composer autoload
require "../vendor/autoload.php"; // composer autoload

/** @see https://pixabay.com/it/photos/albero-paesaggio-virtuale-2470938/# */

$imageSet = [
    'http://93.62.170.226/foto/1110_B.jpg',
    'http://93.62.170.226/foto/gam/Morelli/Leg1-02.jpg',
    'https://it.wikipedia.org/wiki/File:Tesla_Sarony.jpg',
    'https://upload.wikimedia.org/wikipedia/commons/d/d4/N.Tesla.JPG',
    '.\image\tree-2470938_1280.png',
    './image/tree-2470938_1280.png',
    'https://upload.wikimedia.org/ikipedia/commons/d/d4/N.Tesla.JPG',
];



$imagedownloader = new ImageDownloader();

foreach ($imageSet as $image) {
    echo "immagine: $image\n";
    $imagedownloader->open($image);
}

print_mem();
