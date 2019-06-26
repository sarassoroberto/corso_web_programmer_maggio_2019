<?php


class JSONImporter
{
    private $dataset;




    /**
     * Apre un file formato json e lo converte in un array di stdClass
     *
     * @param string $source indirizzo della risorsa locale o remota tramite protocollo HTTP
     * @return JSONImporter un istanza dell'oggetto stesso
     * @todo aggiungere i controli per url non corretti
     * @todo gestire i codici e i messaggi di errore per file non trovato all'interno della classe tramite costanti di classe
     */
    public function open($source): JSONImporter
    {

        $string = '';
        if (!$string = file_get_contents($source)) {
            throw new Exception("non riesco a trovare la risorsa $source");
        }

        /** 
         *  Gestione degli errori di parsing del json 
         *  @see https://laravel-news.com/php-7-3-json-error-handling  
         *       https://www.php.net/manual/en/function.json-last-error.php
         */

        $this->dataset = json_decode($string);
        $error_code = json_last_error();
        $error_msg = json_last_error_msg();

        if ($error_code !== JSON_ERROR_NONE) {

            throw new Exception($error_msg, $error_code);
        }

        return $this;
    }

    /**
     * permette di tradurre l'errore del decoding del json in forma comprensibile
     * codice preso da: @see https://www.php.net/manual/en/function.json-last-error.php
     * vedi esempi
     * 
     * @param int $json_error codice numerico dell'errore
     * @return string messaggio di errore in forma testuale
     * @uses JSONImporter::open()
     */



    /**
     * Permette di salvare il dataset in un file formato json
     *
     * @param string $location percorso del file json da salvare compreso di nome del file
     * @todo da testare, percorso inesistente, 
     * @todo implementare la creazione delle cartelle se necessaria
     * 
     * @see https://stackoverflow.com/questions/11068093/renaming-duplicate-files-in-a-folder-with-php utile per il criterio di rinomina
     * @return void
     */
    public function save($location): void
    {
        $data = json_encode($this->dataset);
        file_put_contents($location, $data);
    }


    public function getDataset()
    {
        return $this->dataset;
    }
    public function setDataset($dataset)
    {
        $this->dataset = $dataset;
        return $this;
    }
}
