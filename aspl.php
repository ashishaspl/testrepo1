<?php
include 'index.php';

class appleMobile extends mobile
{
    public function apple()
    {
        echo $this->prise;
    }
}

$myphone = new appleMobile;
$myphone->apple();
?>