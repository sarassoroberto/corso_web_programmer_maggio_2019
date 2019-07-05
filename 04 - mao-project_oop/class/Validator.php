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
     * @param [type] $ata
     * @return void
     */

    public function base($data):string
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * elimina i tag da una stringa
     *
     * @param string $ata
     * @return string
     */
    
    public function striptag($data):string
    {
        $data = strip_tags($data);
        return $data;
    }
}