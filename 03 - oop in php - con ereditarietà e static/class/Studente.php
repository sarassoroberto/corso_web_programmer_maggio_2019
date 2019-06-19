<?php

class Studente extends Persona
        {
        private $voti = array();
        private $classe = "";
        
        // codice che rappresenta la mia classe

        /** override del metodo costruttore del parent */
        public function __construct($nome,$cognome,$classe)
        {
           // usa il costruttore della classe perent (Genitore - Persona)
           parent::__construct($nome,$cognome); 
           $this->setClasse($classe);
        }
       
        public function __toString()
        {
            return "$this->nome $this->cognome";
        }
       

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
         * Get the value of classe
         */ 
        public function getClasse()
        {
                return $this->classe;
        }

        /**
         * Set the value of classe
         *
         * @return  self
         */ 
        public function setClasse($classe)
        {
                $this->classe = $classe;

                return $this;
        }
}