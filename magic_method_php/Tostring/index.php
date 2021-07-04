<?php 

// This method will be called while using echo method to print an object directly. 
// It is expected to return a string value while using class instances with PHP printing statements.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();
echo $abc;
?>