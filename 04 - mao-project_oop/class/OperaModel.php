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

    public function readAll():array
    {
        try {
            $sql = "SELECT * from opera;";
            $stm = $this->pdo->prepare($sql); 

            $stm->execute();

            $res = $stm->fetchAll(PDO::FETCH_CLASS,'Opera');

            return $res;

        } catch (PDOException $th) {
            echo $th->getMessage();
        }
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
            //echo "opera inserita id: " . $this->pdo->lastInsertId();
            return $this->pdo->lastInsertId();
            
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
    { 
        $sql = "DELETE FROM opera WHERE id_opera=$id_opera;";

        $stm = $this->pdo->prepare($sql);
        $stm->execute();
    }
    /**
     * permette di cancellare un opera
     */
    public function readById(int $id_opera):Opera
    { 
        $sql = "SELECT * FROM opera WHERE id_opera=$id_opera;";

        $stm = $this->pdo->prepare($sql);
        $stm->execute();
        $res = $stm->fetchAll(PDO::FETCH_CLASS,'Opera');
        
        return $res[0];

    }

    public function uploadImmagine(){
        echo "faccio upload";
        print_r($_FILES);
        $handle = new upload($_FILES['Immagine']);
        if ($handle->uploaded) {
            $handle->file_auto_rename = true;
           // $handle->allowed = array('image/*');
            $handle->process(ROOT."/images/originali"); 

            echo $handle->file_dst_path;
        }else{
            echo $handle->error;
        }
    }
}
