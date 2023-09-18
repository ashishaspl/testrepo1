<?php

abstract class food
{
//    protected  $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract function eat();

    public function getName()
    {
        return $this->name;
    }
}

class appple extends food
{
 function eat()
 {
     return "mango";
 }
}

$foodTest = new appple("mango");
echo $foodTest ->getName();