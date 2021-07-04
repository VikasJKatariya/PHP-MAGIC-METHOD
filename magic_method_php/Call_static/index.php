<?php 

// This method is called when an undefined or inaccessible method is invoked in a static manner.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();
ABC::test();


$abc::dfg('vikas');


?>