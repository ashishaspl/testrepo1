<?php

class car
{
    public function __construct($model)
    {
        $this->model=$model;
    }

    public function modelName()
    {
        return $this->model;
    }
}

$obj = new car("shine 100CC");
echo $obj->modelName();

class prise extends car
 {
    public function prise()
    {
        echo "that's prise is 74500 only /-";
    }
}

$prise = new prise(56565);
echo $prise->modelName();