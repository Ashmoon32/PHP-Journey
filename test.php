<?php

class Animal
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function run()
    {
        echo $this->name . " is running...";
    }
}

class Dog extends Animal
{
    public function __construct($name, private $color)
    {
        parent::__construct($name);
    }

    public function profile()
    {
        echo $this->name . " has " . $this->color . " color. ";
    }
}

class cat extends Animal
{
    public function run()
    {

    }
}
$dog = new Dog("Bobby", "Black");
$dog->run();

$dog->profile();