<?php
include "../../config.php";
include "../../autoload.php";

try {

    $id_opera = filter_input(INPUT_GET,'id_opera',FILTER_VALIDATE_INT);

    $om = new OperaModel(DbConnection::getConnection());
    $om->delete($id_opera);

    header('Location: ./elenco_opere_controller.php');


} catch (\Throwable $th) {
    echo $th->getMessage();//throw $th;
}


