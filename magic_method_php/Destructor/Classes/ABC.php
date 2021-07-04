<?php 

class ABC {
    var $name , $email;
    function __construct($name , $email){
         $this->name = $name;
         $this->email = $email;
    }

    function test(){
         echo "this is test function";
    }

    function __destruct(){
        echo  "object id destroyed";
    }
}

?>