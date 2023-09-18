<?php

require "A2.php";
require "A1.php";
require "214.php";

function __autoload($class){
    require $class . ".php";
}

$obj = new a1();
$obj = new a2();
$obj = new a3();
?>