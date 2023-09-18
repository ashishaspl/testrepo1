<?php

$class =array("Class1"=>1, "Class2"=>2,"Class3"=>3,"Class4"=>4,"Class5"=>5,"Class6"=>6);
asort($class);
//rsort($class);
$cs=array_flip($class);
print_r($cs);


//$a = array("Orange" => 100, "Apple" => 200, "Banana" => 300, "Cherry" => 400);
//$b = array_flip($a);
//print_r($b);

//$array = array("a","s","d","g","h");
//
//var_dump($array);

//$ar = array(
//    array("10", 11, 100, 100, "a"),
//    array(   1,  2, "2",   3,   1)
//);
//array_multisort($ar[0]);
//var_dump($ar);