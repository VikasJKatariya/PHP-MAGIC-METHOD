<?php 

class ABC {
   // private $data = 1;

    // public function __set($name, $value) 
    // {
    //    echo $this->data = $value;
    // }

    private $data = [];

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

}

?>