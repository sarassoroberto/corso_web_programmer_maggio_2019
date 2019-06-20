<?php
require "../autoload.php"; // custom autoload
// require "../vendor/autoload"; // composer autoload
/** @todo: trovare il modo di testare gli alti codici di errore diversi da $ syntax error */

$files = [
    "./json/file_inesistente.json",
    "./json/file_vuoto.json",
    "./json/file_manca_valore.json",
    "./json/file_non_valido_immagine.json",
    "./json/file_non_valido_virgola.json",
    "./json/file_valido.json"
];

$ji = new JSONImporter();

/** impostato il foreach all'esterno del try catch cosi posso intercettare tutte le eccezioni */
foreach ($files as $file) {

    try {
        echo "valuto: $file \n";
        $ji->open($file);
    } catch (\Throwable $th) {
        echo $th->getMessage() . "\n";
        echo " - codice errore: " . $th->getCode() . "\n\n";
    }
}
