<?php
class OperaModel
{
    private $pdo;

    public function __constructor()
    {
        try {
            $hostname = "localhost";
            $dbname = "museo";
            $user = "root";
            $pass = "fiacca";
            $this->pdo  = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);
        } catch (\Throwable $e) {
            echo $e->getMessage();
        }
    }

    public function create($opera)
    {
        $this->pdo->prepare();
    }
}

