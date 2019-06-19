<?php 
// percorso per andare a prendere la classe
require "../class/Persona.php";
require "../class/Studente.php";
// istanza  --> classe 

try {
    // il codice che potrebbe generare un errore

    
    $studente1 = new Studente();
    $studente1->setNome("Roberto");
    $studente1->setVoti(6);
    //$studente1->setVoti(11);

    echo "ciao";

    $studente2 = new Studente();
    //$studente2->nome= "Marco";         
    $studente2->setNome("Marco");

    $studente1->nome = "Rosso";


    print_r($studente1);


} catch (Exception $errore) {
    
    echo "\n {$errore->getMessage() } \n";

}




















