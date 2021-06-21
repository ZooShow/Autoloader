<?php

function autoLoad(string $className){
    if (file_exists("src/$className.php")){
        
        require_once "src/$className.php";
    } else {
        
        require_once "src/megaSrc/$className.php";
    }
}

spl_autoload_register('autoLoad');

$a = new Dog("bark");
$a->saySomething();