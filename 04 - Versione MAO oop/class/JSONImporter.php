<?php
class JSONImporter
{
    //costante di classe
    const ERROR_FILE_NOT_FOUND = 10;

    private $dataset;

    public function open($source)
    {
        /** 
         * i formati supportati da file get content
         * @see https://www.php.net/manual/en/wrappers.php
         */
        if(file_exists($source)){
            $dataset_string = file_get_contents($source);
            
            $this->dataset = json_decode($dataset_string);
            $error = json_last_error();

            if($error === JSON_ERROR_NONE){
                  
            }else{
                throw new Exception(json_last_error_msg(),$error);
            }

            //json_last_error_msg

        }else{
           
            throw new Exception("il file $source non esiste",JSONImporter::ERROR_FILE_NOT_FOUND);
        }
    }


    /**
     *  ./folder/folder/filename.ext
     */
    public function save($location)
    {
         // trovare la cartella
         $folder = dirname($location);
         $file = basename($location);
            
         mkdir($folder,null,true);

         // distiguere il nome dl file
         file_put_contents($location,json_encode($this->dataset));
    }
}
