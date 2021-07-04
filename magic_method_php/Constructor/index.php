<?php 

// __construct(): It is a method that gets called automatically after the creation of an object. 
// Any number of arguments can be defined here that will be passed when objects are created.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC('vikas','vikas@gmail.com');

echo '<pre>';
print_r($abc);

$xyz = new XYZ('php' , 'php@gmail.com');

echo '<pre>';
print_r($xyz);

$test = new TEST('test', 'test@gmail.com');
?>