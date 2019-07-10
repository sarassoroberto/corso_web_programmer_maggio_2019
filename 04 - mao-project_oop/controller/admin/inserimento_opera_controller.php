<?php
include "../../config.php";
include "../../autoload.php";
// gestire inserimento dell'opera
// - validazione server
$opera = new Opera();
$errors = [];
if($_SERVER['REQUEST_METHOD']=='POST'){

    // - prendere i dati del form
    
    // validazione e gestione errori 
    $titolo = filter_input(INPUT_POST,'Titolo');
    if(Validator::required($titolo)){
        $opera->Titolo = $titolo;
    }else{
        $opera->Titolo = $titolo;
        $errors['Titolo'] = "il titolo è obbligatorio !!!";
    };

    $opera->Tecnica = filter_input(INPUT_POST,'Tecnica');
    $opera->Autore = filter_input(INPUT_POST,'Autore');
    $opera->Datazione = filter_input(INPUT_POST,'Datazione');
    $opera->Dimensioni = filter_input(INPUT_POST,'Dimensioni');
    $opera->Immagine = filter_input(INPUT_POST,'Immagine');

    if(count($errors)==0){
        // se tutto ok
        // salviamo opera nel datbase
        
        $conn = DbConnection::getConnection();
        $om = new OperaModel($conn);
        $om->create($opera);

        header('Location: ./elenco_opere_controller.php');
        echo "tutto ok";
    }
    
}


// print_r($_SERVER);


// - inserimento dei dati


// - vedere il form di inserimento
// ---> utilizza la vista 

include "../../views/admin/inserimento_opera_view.php";