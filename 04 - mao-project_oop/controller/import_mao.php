<?php
include "../config.php";
include "../autoload.php";

$ji = new JSONImporter();
$db = DbConnection::getConnection();
$om = new OperaModel($db);

$ji->open("https://www.fondazionetorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json");

$dataset = $ji->getDataset();

foreach ($dataset as $opera) {
    
}
