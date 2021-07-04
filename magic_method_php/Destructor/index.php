<?php 

// garbage collection
// Free memory

// __destruct(): Destructor is a common feature of the object-oriented language that gets triggered 
// as soon as there are no other references to a particular object.

// Destructor is a method automatically as soon as garbage collector fins that 
// a particular object has no more references. In PHP, destructor method is named as __destruct. 
// During shutdown sequence too, objects will be destroyed. Destructor method doesn't 
// take any arguments, neither does it return any data type.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC('vikas','vikas@gmail.com');

echo '<pre>';
print_r($abc);
$abc->test();



$xyz = new XYZ('php' , 'php@gmail.com');

echo '<pre>';
print_r($xyz);
?>