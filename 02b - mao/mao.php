<?php
// importare una fonte di dati formato JSON
// ottenere un array/stdClass
// 
$dataset_url = "https://www.fondazionetorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json";
$img_originali_folder = "./img/originali/";

$dataset_string = file_get_contents($dataset_url);
$dataset_json = json_decode($dataset_string);
$dataset_json = array_splice($dataset_json, 0, 10);

// opera

@mkdir($img_originali_folder, null, true);

foreach ($dataset_json as $opera) {
    print_r($opera);
    $img_src = $opera->Immagine;
 
    // $img_download = file_get_contents($img_src);
 
 
    // 
    $image_name = basename($opera->Immagine);
    
    echo $image_name . "\n";
    echo pathinfo($opera->Immagine, PATHINFO_EXTENSION);
    echo urlencode($opera->Titolo);
    //file_put_contents($img_originali_folder."/"., $img_download);
}

// $titolo = "Dam-can rDo-rje-legs-pa";

// echo urlencode($titolo);