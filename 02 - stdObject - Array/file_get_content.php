<?php

$url = 'https://www.fondazionetorinomusei.it/sites/default/files/allegati/COLLEZIONI_MAO.json';

$content = file_get_contents($url);

// ottengo un array di stdClass no secondo parametro
$content_json =  json_decode($content) ;

$opera = $content_json[0];

// non viene risolto il valore della proprietà titolo
//echo "ottengo il titolo da un oggetto: $content_json[0]->Titolo"
;
// le graffe permettono di interpretare strutture più articolate 
echo "ottengo il titolo da un oggetto: {$content_json[0]->Titolo}";
echo "ottengo il titolo da un oggetto: ". $content_json[0]->Titolo;

print_r($opera);
print_r($opera->Titolo);
echo "\n";



$content_assoc =  json_decode($content,true) ;
$opera = $content_assoc[0];

print_r($opera);
// ERRATA
// print_r($opera->Titolo);

// giusta è un array
print_r($opera['Titolo']);

echo $content_assoc[0]['Titolo'];


$json_string = json_encode($content_assoc);

$folder = "./download/dataset/mao/";
// null permette di usare il valore predefinito di un argomento opzionale.
// chicciola silenzia gli errori di una funzione php
@mkdir($folder,null,true);

file_put_contents($folder.'json_mao_scaricato.json',$json_string);




