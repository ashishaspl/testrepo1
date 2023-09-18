<?php
//session_start();
//
//if (isset($_SESSION["name"]))
//{
//    $_SESSION["name"] += 1;
//}else{
//    $_SESSION["name"] =1;
//}
//
//$msg = "hii you have visite that page" . $_SESSION["name"];
//echo $msg;

//session_unset();

//session_destroy();
//echo "session deleted";

//$_SESSION["company"]="aspl";
//echo "session work";

session_start();
$_SESSION["name"]= ashish;

if (isset($_SESSION["name"])){
    echo "seccion started";
}else{
    echo "seccion end";
}

session_unset();
session_destroy();
