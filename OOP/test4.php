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
        echo "$this->name is running...";
    }
}

class Dog extends Animal
{
    public function __construct($name, $color)
    {
        parent::__construct($name);
        $this->color = $color;
    }

    public function profile()
    {
        echo "$this->name has $this->color color.\n";
    }
}


$Bobby = new Dog("Bobby", "Black");
$Bobby->profile();