<?php

class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo "$this->name is running...";
    }
}

$dog = new Animal("Bobby");
var_dump($dog);
$dog->run();