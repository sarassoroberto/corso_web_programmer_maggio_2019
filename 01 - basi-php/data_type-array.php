<?php

// index array
//$colori = ['red'];
$colori = array('red');

// aggiungere un valore in coda a un array
$colori[] = 'green';
$colori[] = 'blue';
$colori[] = 'violet';
$colori[] = 'orange';

// aggiunge un valore in coda
array_push($colori,'yellow');

// echo $colori[1]."\n";

// associative array

$persona = array(
    'nome' => 'Roberto',
    'cognome' => 'Rossi',
    'colore' => 'red'
);

print_r($colori);

// foreach ($colori as $index => $colore) {
//     echo "sono il colore $colore \n sono in posizione $index \n";
// }

// echo $persona['nome'];


print_r($persona);
// foreach ($persona as $label => $informazione) {
//     echo " $label --> $informazione \n";
// }


$persona = new stdClass();

// oggetto/istanza -> proprietà
// oggetto/istanza -> metodo();

$persona->nome = "Roberto";
$persona->cognome = "Rossi";
$persona->colori = ['red','green','blue'];

print_r($persona);

echo $persona->colori[0];
