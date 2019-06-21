<?php

spl_autoload_register(function($classname){
    $path = __DIR__ . "/class/$classname.php";
    // echo $path;
    include $path;
});
