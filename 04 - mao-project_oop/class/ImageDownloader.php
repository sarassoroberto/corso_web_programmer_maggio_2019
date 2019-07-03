<?php
class ImageDownloader
{
    private $imagedata;

    /** @var string $source percorso originale dell'immagine */
    private $source;
    public function open($source): void
    {
        $this->source = $source;
        $this->imagedata = file_get_contents($source);
    }

    /**
     * salva il file scaricato 
     * @todo controllare la destinazione
     * @todo stabilire un criterio di creazione delle cartelle 
     * @todo stabilire un criterio di rinomina dei file esistenti
     * @todo stabilire un criterio di sovrascrittura
     * 
     * @param string $location percorso dove salvare i file comprensivo di nome
     * @return string
     */
    
    public function save(string $location): string
    {
        // creo location se non esiste
        
        @mkdir($location,null,true);

        if(!file_exists($location)){
            throw new Exception("Impossibile creare la directory di destinazione");   
        }

        $destination_filename = $this->transformOriginalName();
        
        @file_put_contents($location.$destination_filename, $this->imagedata);
        return $destination_filename;
    }

    private function transformOriginalName()
    {
        // echo $this->source."\n";
        // echo basename($this->source)."\n";
        return basename($this->source);
    }




    /**
     * controlla la validità di un url
     * @todo  refactoring, spostare in una classe di validazione 
     * @see https://php.net/manual/en/reserved.variables.httpresponseheader.php
     * @param string $url
     * @return void
     */
    private function testUrl($url)
    {
        $header = get_headers($url);
        if ($header[0] == 'HTTP/1.1 200 OK') {

            print_r($header);
        }
    }
}
