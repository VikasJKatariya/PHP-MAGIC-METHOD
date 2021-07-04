<?php 

class ABC {
 private function test(){
     echo "this is test";
 }

 function __call($fun, $arg){
     echo $fun;
     echo '<pre>';
     print_r($arg);
 }

}

?>