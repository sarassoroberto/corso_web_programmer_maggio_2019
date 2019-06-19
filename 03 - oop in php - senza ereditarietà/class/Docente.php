<?php

class Docente {

    public $nome;
    public $cognome;
    public $email;

    public $materia ;

    public function assegnaVoto(Studente $studente,float $valore_voto ) {

    }

      /** 
         *  assegna e l'email 
         *  @param string $e e la mail che voglio inserire
         *  @todo sviluppare il controllo della email
         */
        public function setEmail(string $e){
            
            $this->email = $e;
        }


}