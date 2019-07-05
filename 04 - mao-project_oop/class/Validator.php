<?php
/**
 * classe di validazione generale 
 * Articoli interessanti
 * @see https://www.wordfence.com/learn/how-to-write-secure-php-code/
 * @see https://www.w3schools.com/php7/php7_form_validation.asp
 */
class Validator{

    /**
     * pulizia di base elimina gli spazi e converte i caratteri 
     * speciali in entità html e gli slash.
     *
     * @param [type] $data
     * @return void
     */

    public static function base($data):string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * elimina i tag da una stringa
     *
     * @param string $data
     * @return string
     */

    public static function striptag($data):string
    {
        $data = strip_tags($data);
        return $data;
    }

    /**
     * controlla se il valore di un for e vuoto
     *
     * @param string $data
     * @return string
     */

    public static function required($data):bool
    {
        $data = self::base($data);
        
        // empty restituisce true se la stringa e nulla 
        // empty('') --> true, empty(' ') --> false,  empty('ciao') --> false
        // quindi per avere l'effetto voluto devo negare con !
        return !empty($data);
    }
}