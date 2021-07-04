<?php 

class ABC {
    private $arr = ['name'=>'vikas', 'email'=>'vikas@gmail.com', 'isActive'=>true];
    private $var = "vikas";

    public function __isset($name){

       
        if(isset($this->var)){
            return true;
        }else{
            return false;
        }
        if(isset($this->arr[$name])){
            return true;
        }else{
            return false;
        }
    } 
}

?>