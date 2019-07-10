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
        $pdo = DbConnection::getConnection();

        // preparo la creazione opera il nome dell'immagine dipende dall'esito dell'upload
        if (!empty($_FILES['Immagine'])) {
    
            // var_dump(file_exists(IMG_DIR_ORIGINALI));
            print_r($_FILES['Immagine']);
            $upload = Upload::factory('./images');
            
            // $upload->set_filename('dfsdfffb.jpg');
            $upload->file($_FILES['Immagine']);
            
            $results = $upload->upload();
            
            print_r($results);
            
        }
        $om = new OperaModel($pdo);
        //$om->create($opera);
    }
} 


include "../../view/admin/inserimento_opera_view.php";
