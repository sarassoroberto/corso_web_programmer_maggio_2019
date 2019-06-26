<?php
class ImageDownloader
{
    private $imagedata;
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
     * @return void
     */
    public function save($location): void
    {
        echo ("" . __CLASS__ . '->' . __FUNCTION__ . ' Line: ' . __LINE__) . "\n";
        $dirname = dirname($location);
        $basename = basename($location);

        echo "--------------------------------------\n";
        echo "Valuto:\n";
        echo $dirname . "\n";
        echo $basename . "\n";

        if (!is_dir($dirname)) {
            echo "$dirname non è una directory\n";
        }

        if (!is_file($basename)) {
            echo "$basename non è un file\n";
        }

        if (!file_exists($dirname)) {
            echo "$dirname non esiste\n";
        }
        echo "---------------------------------------\n";

        @file_put_contents($location, $this->imagedata);
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
