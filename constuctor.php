<?php

class constructor
{
    private $accountNumber;
    private $balance;

    public function __construct($accNo, $balance)
    {
        $this -> accountNumber = $accNo;
        $this ->balance = $balance;
        echo "this is my new accoount and my balance is";
    }

    public function __destruct()
    {
        echo "this is my account nu {$this -> accountNumber} and my balance {$this ->balance}";
    }
}

$newAccountInfo = new constructor(12, 544454);

print "<pre>";
print_r($newAccountInfo);
print  "</pre>";


