<?php
include "04 - mao-project_oop\class\Opera.php";
try {
    $servername = 'localhost';
    $dbname = 'museo';
    $username = 'root';
    $password='';
    $unix_socket = '/var/mysql/mysql.sock';
    $port=3306;
    // mysql:unix_socket=/tmp/mysql.sock;dbname=testdb
    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception

    // form 
    // $opera->Autore = ";DROP TABLE;";
    // // $sth = $pdo->prepare("select * from opera");
    // $sql = "INSERT INTO opera (Autore, Titolo, Datazione, Tecnica, Dimensioni, Immagine) 
    //         VALUES (:Autore, :, 'XXX', 'mista', '10x2', 'gatto.jpg');";

    // $pdo->prepare($sql);
    // // assegna i parametri
    
    // eseguire la query
    // $sth->execute();
    // $res = $sth->fetchAll(PDO::FETCH_CLASS,'Opera');

    // print_r($res);
}catch(PDOException $e)
{
    echo $e->getMessage();

}

