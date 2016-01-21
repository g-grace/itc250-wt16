<?php
//class-test1.php

$myPerson = new Person('Steve');
echo $myPerson->Name;

class Person{

    public $Name = '';
    public function __construct ($Name)
    {
        $this->Name = $Name;

    }


} //end Person class