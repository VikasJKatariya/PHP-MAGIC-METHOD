<?php 

// __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();

echo $abc->name;

?>