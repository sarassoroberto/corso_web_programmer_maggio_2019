<?php 
// percorso per andare a prendere la classe
require "../class/Studente.php";
// istanza  --> classe 

try {
    // il codice che potrebbe generare un errore

    
    $studente1 = new Studente();
    $studente1->nome = "Roberto";
    $studente1->setVoti(6);
    $studente1->setVoti(11);



    $studente2 = new Studente();
    $studente2->nome = "Marco";





} catch (Exception $errore) {
    
    echo "\n {$errore->getMessage() } \n";

}




















