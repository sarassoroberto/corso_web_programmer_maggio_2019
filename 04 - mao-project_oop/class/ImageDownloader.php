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

    public function save($location): void
    {
        file_put_contents($location, $this->imagedata);
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
