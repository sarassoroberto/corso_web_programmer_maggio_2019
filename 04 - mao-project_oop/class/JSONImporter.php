<?php


class JSONImporter
{
    private $dataset = '';
    public function open($source)
    {
        if (file_exists($source)) {
            $string = file_get_contents($source);
        } else {
            throw new Exception('non riesco a trovare la risorsa $source');
            throw new Exception("non riesco a trovare la risorsa $source");
        }

        /** Gestione degli errori di parsing del json 
         *  @see https://laravel-news.com/php-7-3-json-error-handling
         *  @see https://www.php.net/manual/en/function.json-last-error.php
         */
        $this->dataset = json_decode($string);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new Exception('errore nel formato del json');
        }

        return $this;
    }

    public function save($location)
    {
        $data = json_encode($this->dataset);
        return file_put_contents($location, $data);
    }
}
