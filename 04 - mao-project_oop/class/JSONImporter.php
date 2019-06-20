<?php
class JSONImporter
{
    private $dataset = '';
    public function open($source)
    {
        if (file_exists($source)) {
            $string = file_get_contents($source);
            $this->dataset = json_decode($string);
        } else {
            throw new Exception('non riesco a trovare la risorsa $source');
        }

        return $this;
    }

    public function save($location)
    {
        $data = json_encode($this->dataset);
        return file_put_contents($location, $data);
    }
}
