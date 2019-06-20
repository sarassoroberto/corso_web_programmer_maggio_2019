<?php
class JSONImporter
{
    private $dataset = '';
    public function open($source)
    {
        $string = file_get_contents($source);
        $this->dataset = json_decode($string);

        return $this;
    }

    public function save($location)
    {
        $data = json_encode($this->dataset);
        return file_put_contents($location, $data);
    }
}
