<?php
class ImageDownloader
{
    private $imagedata;
    private $source;
    public function open($source): void
    {
        $this->imagedata = file_get_contents($source);
    }

    public function save($location): void
    {
        file_put_contents($location, $this->imagedata);
    }
}
