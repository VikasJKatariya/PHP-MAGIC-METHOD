<?php 

//__set() is run when writing data to inaccessible (protected or private) or non-existing properties.

// The __set() magic method is called when you try to set data to inaccessible or non-existent object,
//  properties. The purpose of this method is to set extra object data for which you haven’t defined 
//  object properties explicitly.

function __autoload($className){
    include_once "Classes/$className.php";
}

$abc = new ABC();
//  __set() called
// $abc->data = "dfd" ;
echo  $abc->datdsdsd = "vikas";
echo  $abc->ete = "tet";
echo '<pre>';
print_r($abc);

?>