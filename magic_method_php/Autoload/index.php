<?php 
// include_once "Classes/ABC.php";
// include_once "Classes/XYZ.php";


function __autoload($className){
    include_once "Classes/$className.php";
}
$abc = new ABC();
$xyz = new XYZ();

?>