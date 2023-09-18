<?php
//$student=array("f_name"=>"manish" , "m_name"=>"joy", "l_name"=>"bhanshari");
//
//foreach ($student as $as => $name)
//{
//    echo $as . ":" .$name . "<br>";
//}

$city=array(
    "fruits"=> array("mango","orange","apple"),
    "city"=>array("rajkot","surat","baroda")
);

foreach ($city as $citys => $fruit)
{
    echo "$citys :";

    foreach ($fruit as $cname)
    {
        echo "$cname ," ;
    }
    echo "<br>";
}