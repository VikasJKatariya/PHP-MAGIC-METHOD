<!-- <?php 

// class ABC {
//     public $name;
//     function __toString(){
//         return get_class($this);
//     }
//     function __construct($name){
//         $this->name = $name;
//     }

    
//     function __sleep(){
//         $this->name = $name;
//     }



// }

?> -->
<!-- //output : ABC -->
<?php 
class demoSleepWakeup {
    public $resourceM;
    public $arrayM;

    public function __construct() {
        $this->resourceM = 'vias';
        $this->arrayM = array(1, 2, 3, 4); // Enter code here
    }

    public function __sleep() {
        return array('arrayM');
    }

    public function __wakeup() {
        $this->resourceM = 'vias';
    }
}

$obj = new demoSleepWakeup();
$serializedStr = serialize($obj);

echo '<pre>';
//print_r($obj);
//print_r($serializedStr);
print_r(unserialize($serializedStr));
?>