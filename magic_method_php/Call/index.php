<?php 

//  This method is called when an undefined or inaccessible method is called. 
//  Which means it is Called when an undefined or inaccessible method is invoked on an object.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();
$abc->test();


$abc->dfg('vikas');


?>