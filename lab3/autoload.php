<?php

require_once("config.php");

function my_autoloader($class) {
    $path = __DIR__.'/Model/' . $class . '.php';
    if (file_exists($path)) {

        require_once($path);
    } else {
        throw new Exception("Class ".$class." is not found");
        return false;
    }
}

// my_autoloader("Counter");
// my_autoloader("Visitor");
spl_autoload_register('my_autoloader');

// echo "sdjfk";
$count = new Counter(_Counter_FILE_);
$count->prints();