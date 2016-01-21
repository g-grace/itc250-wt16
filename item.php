<?php
//item.php

/*

This serves as a resource for our second project


*/

class Item
{
    public $name = '';
    public $description = '';
    public $price = 0;
    
    public function __construct($name,$description,$price)
    {
        $This->name = $name;
        $This->description = $description;
        $This->price = $price;
        
    }
    
}