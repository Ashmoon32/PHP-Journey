<?php

interface Animal
{
    public function move();
}

class Dog implements Animal
{
    public function move()
    {
        echo "The dog is running...\n";
    }
}

class Fish implements Animal 
{
    public function move()
    {
        echo "The fish is swimming...\n";
    }
}


function app(Animal $obj)
{
    $obj->move();
}

app(new Dog);
app(new Fish);