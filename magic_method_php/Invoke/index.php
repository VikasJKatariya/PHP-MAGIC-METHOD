<?php 

// The __invoke() magic method is a special method which is called when you try to call an object as 
// if it were a function. Firstly, let’s see how it works, and then we’ll see the purpose of this magic method.

//This method is called when a script tries to call an object as a function.


function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();
$abc('vikas','vikas2');


?>