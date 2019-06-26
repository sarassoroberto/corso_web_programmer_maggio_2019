<?php
// require "../autoload.php"; // custom autoload
require "./utility/memory_usage.php"; // composer autoload
require "../vendor/autoload.php"; // composer autoload

/** @see https://pixabay.com/it/photos/albero-paesaggio-virtuale-2470938/# */

$testSet = [
    [
        'source' => 'http://93.62.170.226/foto/1110_B.jpg',
        'destination' => './download/1110_B.jpg',
        'test' => true
    ],
    [
        'source' => 'http://93.62.170.226/foto/1110_B.jpg',
        'destination' => './download/originali/1110_B.jpg',
        'test' => false
    ],
    [
        'source' => 'http://93.62.170.226/foto/1110_B.jpg',
        'destination' => './1110_B.jpg',
        'test' => true
    ],
    [
        'source' => 'http://93.62.170.226/foto/1110_B.jpg',
        'destination' => '1110_B.jpg',
        'test' => true
    ],
    [
        'source' => 'http://93.62.170.226/foto/1110_B.jpg',
        'destination' => 'a/b/c',
        'test' => true
    ],

];

$imagedownloader = new ImageDownloader();

foreach ($testSet as $test) {
    $imagedownloader->open($test['source']);
    $imagedownloader->save($test['destination']);

    // if (!file_exists($test['destination'])) {
    //     echo "file non trovato";
    // };
}

print_mem();
