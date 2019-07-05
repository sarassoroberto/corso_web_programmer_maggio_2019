<?php 
class Validator 
{
    public static function base($data)
    {
        return htmlspecialchars(trim($data));
    }

    public static function required($data):bool
    {
        //false se  il cmapo non viene compilato
        return self::base($data) != '';
    }
}
