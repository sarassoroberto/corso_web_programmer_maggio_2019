<?php

class Persona
{

    protected $id;
    protected $nome;
    protected $cognome;
    private $email;

    private static $contatore = 0;
    /**
     * viene eseguito quando  faccio new Persona
     */
    public function __construct($nome,$cognome)
    {
        // $a++
        // $this->contatore // errato perchè riferito all'istanza
        $this->id = self::$contatore++;
        //$this->nome = $nome;
        $this->setNome($nome);
        $this->setCognome($cognome);
    }

    public static function getContatore(){
        return self::$contatore;
    }


    /** 
     *  assegna e l'email 
     *  @param string $e e la mail che voglio inserire
     *  @todo sviluppare il controllo della email
     */
    public function setEmail(string $e)
    {

        $this->email = $e;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of cognome
     */ 
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set the value of cognome
     *
     * @return  self
     */ 
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }
}
