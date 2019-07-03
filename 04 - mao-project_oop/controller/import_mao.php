<?php
include "../config.php";
include "../autoload.php";

$ji = new OperaImporter();

$ji->open("https://www.fondazionetorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json");

$dataset = $ji->getDataset();

foreach ($dataset as $opera) {
      
}
