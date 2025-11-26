<?php

interface Animal
{
    public function move();
}

interface Livestock
{
    public function isFriendly();
}
class Cow implements Animal, Livestock
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function move()
    {
        echo "$this->name is moving...\n";
    }

    public function isFriendly()
    {
        if (true)
            {
                echo "$this->name is friendly.\n";
            } else {
                echo "$this->name is not friendly.\n";
            }
    }
}

$cow = new Cow("Holy Cow");
$cow->move();
$cow->isFriendly();


