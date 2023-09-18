<?php
//setcookie("ashish","bambhaniya", time()+50, "/","",0);
//setcookie("age", "22", time()+50, "/", "",  0);
//
//echo "setcookie";

$cookie_name = "name";
$cookie_value = "ashish";
setcookie($cookie_name,$cookie_value,time() + (10),"/");

echo $_COOKIE[$cookie_name];
if (!isset($_COOKIE["name"]))
{
    echo "not set";
}
else{
    echo $_COOKIE["name"];
}