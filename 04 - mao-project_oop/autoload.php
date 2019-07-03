<?php
// Or, using an anonymous function as of PHP 5.3.0
spl_autoload_register(function ($class) {
    // claviska\SimpleImage
    include __DIR__ . '/class/' . $class . '.php';
});
