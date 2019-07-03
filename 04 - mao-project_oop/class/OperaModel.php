<?php

/**
 * C.R.U.D.
 */
class OperaModel
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * permette di inserire un opera
     */
    public function create(Opera $opera)
    {
        try {

            $sql = "INSERT INTO opera (Autore, Titolo, Datazione, Tecnica, Dimensioni, Immagine) 
            VALUES (:autore, :titolo, :datazione, :tecnica, :dimensioni, :immagine);";

            $stm = $this->pdo->prepare($sql); // PDOStatement

            $stm->bindValue(':autore', $opera->Autore);
            $stm->bindValue(':titolo', $opera->Titolo);
            $stm->bindValue(':datazione', $opera->Datazione);
            $stm->bindValue(':tecnica', $opera->Tecnica);
            $stm->bindValue(':dimensioni', $opera->Dimensioni);
            $stm->bindValue(':immagine', $opera->Immagine);
            // assegna i parametri

            // eseguire la query
            $stm->execute();

            // restituisce id dell' opera inserita --> se la voglio collocare subito in un museo
            echo "opera inserita id: " . $thtis->pdo->lastInsertId();
        } catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    /**
     * permette di aggiornare i dati di un opera
     */
    public function update(Opera $opera)
    { }

    /**
     * permette di cancellare un opera
     */
    public function delete(int $id_opera)
    { }
}
