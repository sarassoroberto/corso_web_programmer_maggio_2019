<?php
include "04 - mao-project_oop\class\Opera.php";
try {
    $servername = 'localhost';
    $dbname = 'museo';
    $username = 'root';
    $password='';
    $unix_socket = '/var/mysql/mysql.sock';
    $port=3306;
    
    $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception

    $opera = new Opera();
    $opera->Autore = "Autore opera";
    $opera->Titolo = "Titolo opera";
    $opera->Immagine = "immagine.jpg";
    $opera->Tecnica = "Tecnica";
    $opera->Datazione = "Datazione";
    $opera->Dimensioni = "dimensioni";

    // lettura db
    // $sth = $pdo->prepare("select * from opera");
    $sql = "INSERT INTO opera (Autore, Titolo, Datazione, Tecnica, Dimensioni, Immagine) 
            VALUES (:autore, :titolo, :datazione, :tecnica, :dimensioni, :immagine);";

    $stm = $pdo->prepare($sql); // PDOStatement

    // assegna i parametri 
    $stm->bindValue(':autore',$opera->Autore);
    $stm->bindValue(':titolo',$opera->Titolo);
    $stm->bindValue(':datazione',$opera->Datazione);
    $stm->bindValue(':tecnica',$opera->Tecnica);
    $stm->bindValue(':dimensioni',$opera->Dimensioni);
    $stm->bindValue(':immagine',$opera->Immagine);

    
    // eseguire la query
    $stm->execute();
    
    // restituisce id dell' opera inserita --> se la voglio collocare subito in un museo
    return $pdo->lastInsertId();

}catch(PDOException $e)
{
    echo $e->getMessage();

}

