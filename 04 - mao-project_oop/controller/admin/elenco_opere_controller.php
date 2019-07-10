<?php
include "../../config.php";
include "../../autoload.php";

try {

    $conn = DbConnection::getConnection();
    $om = new OperaModel($conn);
    $opere = $om->readAll();

   

} catch (Exception $e) {
    echo $e->getMessage();
} catch (PDOException $pdoe) {
    echo $pdoe->getMessage();
}

include('../../views/admin/elenco_opere_view.php');
