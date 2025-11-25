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
        echo "$this->name is running...\n";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo "$this->name is barking...\n";
    }
}

$dog = new Dog("Aung Net");
$dog->run();
$dog->bark();