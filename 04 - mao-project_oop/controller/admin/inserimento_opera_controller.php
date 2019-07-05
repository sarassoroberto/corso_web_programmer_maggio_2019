<?php
// gestire inserimento dell'opera
// - prendere i dati del form
// - validazione server

if($_SERVER['REQUEST_METHOD']=='POST'){
    print_r($_POST);
    

}else{
    echo "non ho compilato il form";
}


// print_r($_SERVER);


// - inserimento dei dati


// - vedere il form di inserimento
// ---> utilizza la vista 

include "../../views/admin/inserimento_opera_view.php";