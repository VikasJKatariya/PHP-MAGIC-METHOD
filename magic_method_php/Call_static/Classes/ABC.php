<?php 

class ABC {
private static function test(){
     echo "this is test";
 }

 public static function __callStatic($fun, $arg){
     echo $fun;
     echo '<pre>';
     print_r($arg);
 }

}

?>