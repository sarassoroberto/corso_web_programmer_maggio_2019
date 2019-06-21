<?php
include "../autoload.php";

error_reporting(0);

$ji = new JSONImporter();
$source = "https://www.fondazionetorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json";
$source = "https://www.fonxcvxvorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json";
//$source = "./dataset/COLLEZIONI_MAO.json";
// $source = "./datasxxxet/COLLEZIONI_MAO.json";

try {

    $ji->open($source);

} catch (Exception $e) {

   echo  $e->getMessage();
}


print_r($ji);