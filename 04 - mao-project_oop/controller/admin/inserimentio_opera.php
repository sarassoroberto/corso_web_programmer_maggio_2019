<?php
include "../../autoload.php";

$opera = new Opera();

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "<p>form inviato <br></p>";
    $opera->Titolo = filter_input(INPUT_POST,'Titolo');



    var_dump($opera->Titolo);
    var_dump(empty($opera->Titolo));

    // print_r($opera);
}



include "../../view/admin/inserimento_opera_view.php";


