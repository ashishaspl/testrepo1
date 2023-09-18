<?php
class MyClass {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function __toString() {
        return "My name is " . $this->name;
    }
}

$obj = new MyClass("John");
echo $obj;
