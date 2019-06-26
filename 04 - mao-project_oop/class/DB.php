<?php
use Nette\Neon\Exception;

class DB
{
    private $conn;
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {

            echo "creo istanza";
            $hostname = "localhost";
            $dbname = "museo";
            $user = "root";
            $pass = "fiacca";
            try {
                self::$instance = new PDO("mysql:host=$hostname;dbname=$dbname", $user, $pass);
                print_r(self::$instance);
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        } else {
            echo "prendo";
            print_r(self::$instance);
            return self::$instance;
        }
    }
}

$pdo = DB::getInstance();
$pdo2 = DB::getInstance();
$pdo3 = DB::getInstance();
echo "--";
print_r($pdo->prepare("s"));
