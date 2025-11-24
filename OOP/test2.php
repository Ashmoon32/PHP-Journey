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


echo "\n------------------------------------\n";


class Dog
{
    private $dog_name = "Booby";

    public function bark()
    {
        echo "$this->dog_name is barking...";
    }
}

$DOG = new Dog;
$DOG->bark();

class Animal1 
{
    public function __construct(private $name)
    {
        //
    }

    public function run()
    {
        echo "$this->name is running...";
    }
}

$dog1 = new Animal1("Aung Net");
echo "\n";
$dog1->run();
echo "\n";