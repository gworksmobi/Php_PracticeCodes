<?php
function __autoload($class_name) {
    if(file_exists($class_name . '.php')) {
        require_once($class_name . '.php');    
    } else {
        throw new Exception("Unable to load $class_name.");
    }
}
 
try {
    $a = new forloop();
    $b = new inheritance();
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
}
?>