<?php
use claviska\SimpleImage;

include "../config.php";
include "../autoload.php";
// include "../vendor/autoload.php";

$pdo = DbConnection::getConnection();
$operaModel = new OperaModel($pdo);
$imagedl = new ImageDownloader();



$jsonImporter = new JSONImporter();
$jsonImporter->open("https://www.fondazionetorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json");

// prende tutti id dato
// $dati = $jsonImporter->getDataset();

// prendo solo 1 primi 10
$dati = $jsonImporter->slice(0,5);

echo "sono ". count($dati); 

foreach ($dati as $o) {

    try {
        $opera = new Opera();
       
        $opera->Autore = $o->Autore;
        $opera->Dimensioni = $o->Dimensioni;
        $opera->Datazione = $o->Datazione;
        $opera->Tecnica = $o->Tecnica;
        $opera->Titolo = $o->Titolo;

        $imagedl->open($o->Immagine);
        $opera->Immagine = $imagedl->save('../images/originali/');

        $operaModel->create($opera);
        //print_r($opera);

        $image = new SimpleImage();
        $image->fromFile("../images/originali/$opera->Immagine");
        $image->bestFit(100,100);
        mkdir("../images/small/");
        $image->toFile("../images/small/$opera->Immagine");


    } catch (Exception $e) {
        echo $e->getMessage();
        echo $e->getTraceAsString();
    }



    // $opera->Immagine = $o->Immagine;
}

//print_r($dati);