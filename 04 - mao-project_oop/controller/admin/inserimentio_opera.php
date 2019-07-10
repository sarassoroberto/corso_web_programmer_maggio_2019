<?php
include "../../config.php";
include "../../autoload.php";

$opera = new Opera();
$errors = [];
if($_SERVER['REQUEST_METHOD']=='POST'){

    $titolo = filter_input(INPUT_POST,'Titolo');
   
    /**
     * Validazione del titolo obbligatoria
     */
    if(!Validator::required($titolo)) {
     
        $errors['Titolo'] = 'Il titolo è obbligatorio'; 
       
    } 
    $opera->Titolo = $titolo;

    if(count($errors)==0){
        echo "ok puoi salvare";
    }
} 


include "../../view/admin/inserimento_opera_view.php";
