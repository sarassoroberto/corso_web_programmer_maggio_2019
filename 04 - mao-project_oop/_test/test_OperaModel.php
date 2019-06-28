<?php
include "../config.php";
include "../autoload.php";

$opera = new Opera();
$opera->Autore = "Autore opera";
$opera->Titolo = "Titolo opera";
$opera->Immagine = "immagine.jpg";
$opera->Tecnica = "Tecnica";
$opera->Datazione = "Datazione";
$opera->Dimensioni = "dimensioni";

$pdo = DbConnection::getConnection();

$operaModel = new OperaModel($pdo);

$lasid = $operaModel->create($opera);

echo "$lasid";