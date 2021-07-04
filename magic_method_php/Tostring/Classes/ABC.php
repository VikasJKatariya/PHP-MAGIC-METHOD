<?php 

class ABC {
    function __toString(){
        return get_class($this);
    }


}

?>
<!-- //output : ABC -->