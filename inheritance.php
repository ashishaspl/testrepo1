<?php

class car
{
//    public $speed;

    public function  __construct($kmh)
    {
        $this ->speed = $kmh;
    }
    public function showspeed()
    {
        return $this ->speed;
    }
}

$speedcar = new car(120);
echo $speedcar -> showspeed();

#inheritance

class newCar extends car
{
    public function showspeed()
    {
        echo "how's the speed";
    }
}
$carNew = new newCar(444);
echo $carNew -> showspeed();