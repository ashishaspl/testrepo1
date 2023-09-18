<?php

interface user
{
    public function animal($name);
    public function bName();
}

interface paswd
{
    public function setpaswd();
}
class forest implements  user, paswd
{
    public $animalName;
    private $pw;
    public function animal($name)
    {
       $this -> animalName = $name;
    }

    public function bName()
    {
       echo $this -> animalName;
    }
    public function setpaswd()
    {
     $this ->pw= "123456";
         echo $this->pw;
    }
}

$lion = new forest();
$lion->animal("lion");
$lion->bName();
$lion->setpaswd();