<?php 

class XYZ {
    function __construct(){
         echo "this is a constructor of base class XYZ\n";
    }
    
}
class TEST extends XYZ{
   function __construct(){
      parent::__construct();
      echo "this a constructor class  TEST\n";
   }
}

?>