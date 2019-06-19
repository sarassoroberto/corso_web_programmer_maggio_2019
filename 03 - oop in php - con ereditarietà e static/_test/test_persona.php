<?php
include ("../class/Persona.php");
include ("../class/Studente.php");
//$persona = new Persona('Marco','Verdi');

$studente = new Studente('Gianni','Tornacollo','3C');
$studente1 = new Studente('Gianna','Tornacollo','3C');
$studente2 = new Studente('Giovanni','Tornacollo','3C');
// $studente = new Studente('Gianni','Tornacollo','3C');
// $studente = new Studente('Gianni','Tornacollo','3C');

//print_r($persona);
echo "il numero di istanze create: ".Studente::getContatore()."\n";

print_r($studente);
print_r($studente1);
print_r($studente2);

// echo $studente;
