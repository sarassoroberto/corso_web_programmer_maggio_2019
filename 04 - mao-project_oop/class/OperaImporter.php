<?php


class OperaImporterb extends JSONImporter
{
    private $dataset;

    public function setDataset($dataset)
    {
        

        foreach ($dataset as $o) {
           $opera  = new Opera();
           $opera->Autore = $o->Autore;
           $opera->Titolo = $o->Titolo;
           $opera->Datazione = $o->Datazione;
           $opera->Dimensioni = $o->Dimensioni;
           $opera->Tecnica = $o->Tecnica;


           $opera->Immagine =

           $this->dataset[] = $opera;
        }

        
        return $this;
    }

  
}
