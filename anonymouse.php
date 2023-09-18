<?php

class newTest
{
    function vi()
    {
        echo "vi" ;
    }
}
$vi = new newTest();
$vi -> vi();

$anonymous = new class extends newTest
{
    private $idia = "idia jo badlde aapki life";

    function printidia(){echo $this->idia;}
};
$anonymous -> printidia();
$anonymous ->vi();