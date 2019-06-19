<?php

class Studente {
        // codice che rappresenta la mia classe
        public $nome;
        public $cognome;
        private $email;

        private $voti = array();

        
       
        public function setVoti(float $voto){
            // stabilisco algoritmo del voto
            if($voto>2 && $voto <= 10 ){
                
                $this->voti[] = $voto;
                
            } else {

                $messaggio = new Exception("Il valore $voto è errato");
                throw $messaggio;

            }
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