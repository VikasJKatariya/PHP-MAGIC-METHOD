<?php 

class ABC {
    private $name = "vikas";
    private $arr = ['vikas' => 'vikas', 'test'=>'test'];
    function __get($var){
         echo $this->name;
         echo '<br>';
         echo 'mathod call while undefined or private variable access';
    }

}

?>