<?php 

// __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.

// this method will be called while calling isset()  or empty() for an undefined or inaccessible member. 
// It is invoked automatically while checking whether a required overloaded property is set or not, 
// by using the PHP isset() function.
function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();

var_dump(isset($abc->vikas));

var_dump(isset($abc->sdfs));
?>