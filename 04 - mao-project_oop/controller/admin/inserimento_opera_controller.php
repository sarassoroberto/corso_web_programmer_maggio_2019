<?php
include "../../config.php";
include "../../autoload.php";
// gestire inserimento dell'opera
// - validazione server
$opera = new Opera();
$errors = [];
if($_SERVER['REQUEST_METHOD']=='POST'){
    print_r($_POST);
    // - prendere i dati del form
    
    $titolo = filter_input(INPUT_POST,'Titolo');
    if(Validator::required($titolo)){
        $opera->Titolo = $titolo;
    }else{
        $opera->Titolo = $titolo;
        $errors['Titolo'] = "il titolo è obbligatorio !!!";
    };

    $opera->Tecnica = filter_input(INPUT_POST,'Tecnica');

    if(count($errors)>0){
        echo "ci sono errori";
    }
    
    // validazione e gestione errori 

    // se tutto ok
    // instanziamo  un  Opera 
    // OperaModel::create()
    
}else{
    echo "non ho compilato il form";
}


// print_r($_SERVER);


// - inserimento dei dati


// - vedere il form di inserimento
// ---> utilizza la vista 

include "../../views/admin/inserimento_opera_view.php";