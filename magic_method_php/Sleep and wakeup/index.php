<?php 

// serialize() method in class checks if it has a function name __sleep(). If so, that function is executed prior to any serialization. It is supposed to return an array with the
//  names of all variables of that object that should be serialized.


//  unserialize() method checks there exists a function with the magic name __wakeup().
//   If present, this function can reconstruct any resources that the object may have.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC('vikas');
// echo $abc;

$serialize = serialize($abc);
echo $serialize;
echo '<br>';

$unserialize = unserialize($serialize);
echo $unserialize;
?>