<?php 

// __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.

// this method will be called while calling isset()  or empty() for an undefined or inaccessible member. 
// It is invoked automatically while checking whether a required overloaded property is set or not, 
// by using the PHP isset() function.
class Student { public $gender; public $name; public $reg; public function __construct($name="", $reg=30, $gender='Male') { $this->name = $name;
        $this->reg  = $reg;
        $this->gender  = $gender;
    }
 
    public function __clone()
    {
        echo __METHOD__."you are cloning the object.
";
    }
 
}
 
$obj = new Student('Ashok'); // Initially assigned.
$obj2 = clone $obj;
print_r($obj);
print_r($obj2);

Class Student_School {
}
class Student1 {
    private $name;
    private $email;
    private $object_student_school;
 
    public function __construct()
    {
        $this->object_student_school = new Student_School();
    }
 
    public function __clone()
    {
        $this->object_student_school = clone $this->object_student_school;
    }
}
 
$objStudentOne = new Student1();
$objStudentTwo = clone $objStudentOne;
print_r($objStudentOne);
print_r($objStudentTwo);
 
// print_r('object1:');
// print_r($obj);
// echo '
// ';
// print_r('object2:');
// print_r($obj2);




//call by value
function increment($var){
$var++;
return $var;
}
$a = 5;
$b = increment($a);
echo $a; //Output: 5
echo $b; //Output: 6


//call by reference

function increment1(&$var){
$var++;
return $var;
}
$a = 5;
$b = increment1($a);
echo $a; //Output: 6
echo $b; //Output: 6
?>