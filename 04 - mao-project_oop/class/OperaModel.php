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
    { 
        echo "sono update<br>";
        print_r($opera);
        
        $sql = "UPDATE opera SET Titolo = :Titolo,
                                 Autore = :Autore,
                                 Datazione = :Datazione,
                                 Tecnica = :Tecnica,
                                 Dimensioni = :Dimensioni,
                                 Immagine = :Immagine
                WHERE id_opera = :id_opera;
        ";

            $stm = $this->pdo->prepare($sql); // PDOStatement

            $stm->bindValue(':Autore', $opera->Autore);
            $stm->bindValue(':Titolo', $opera->Titolo);
            $stm->bindValue(':Datazione', $opera->Datazione);
            $stm->bindValue(':Tecnica', $opera->Tecnica);
            $stm->bindValue(':Dimensioni', $opera->Dimensioni);
            $stm->bindValue(':Immagine', $opera->Immagine);
            $stm->bindValue(':id_opera', $opera->id_opera);
            // assegna i parametri

            // eseguire la query
            $stm->execute();
    }
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

       //  move_uploaded_file($_FILES['Immagine']['tmp_name'],UPLOAD_DIR.$_FILES['Immagine']['name']);
        echo "faccio upload";
        print_r($_FILES);

        $handle = new upload($_FILES['Immagine']);
        if ($handle->uploaded) {
            $handle->file_auto_rename = true;
           // $handle->allowed = array('image/*');
            $handle->process(ROOT."/images/originali"); 

            return $handle->file_src_name;
        }else{
            echo $handle->error;
        }
    }
}
