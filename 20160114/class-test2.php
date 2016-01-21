<?php
//class-test2.php
//function inside the class is method   //()is function constructed inside the class.  //class is internal/never die  //object dies

$people[] = new Person('Sangon','Grace',29);  
$people[] = new Person('Newman','Bill',30);  
$people[] = new Person('Homer','Simpson',31);  


echo '<pre>';
var_dump($people);
echo '</pre>';


class Person{
    //properties
    public $LastName = '';
    public $FirstName = '';
    public $Age = 0;

    public function Person($LastName,$FirstName,$Age)
    {
        $this->LastName = $LastName;
        $this->FirstName = $FirstName;
        $this->Age= $Age;
    
    }//end constructor()

}//end of class