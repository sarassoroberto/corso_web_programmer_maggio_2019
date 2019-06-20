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

        /** 
         *  Gestione degli errori di parsing del json 
         *  @see https://laravel-news.com/php-7-3-json-error-handling  
         *       https://www.php.net/manual/en/function.json-last-error.php
         */

        $this->dataset = json_decode($string);
        $error_code = json_last_error();

        if ($error_code !== JSON_ERROR_NONE) {
            $errorMessage = $this->getDecodeErrorMessage($error_code);
            throw new Exception($errorMessage, $error_code);
        }

        return $this;
    }

    public function save($location)
    {
        $data = json_encode($this->dataset);
        return file_put_contents($location, $data);
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

    private function getDecodeErrorMessage($json_error): string
    {
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                return ' - No errors';
                break;
            case JSON_ERROR_DEPTH:
                return ' - Maximum stack depth exceeded';
                break;
            case JSON_ERROR_STATE_MISMATCH:
                return ' - Underflow or the modes mismatch';
                break;
            case JSON_ERROR_CTRL_CHAR:
                return ' - Unexpected control character found';
                break;
            case JSON_ERROR_SYNTAX:
                return ' - Syntax error, malformed JSON';
                break;
            case JSON_ERROR_UTF8:
                return ' - Malformed UTF-8 characters, possibly incorrectly encoded';
                break;
            default:
                return ' - Unknown error';
                break;
        }
    }
}
