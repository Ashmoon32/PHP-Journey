<?php

class Dog
{
    public function run() 
    {
        echo "This dog is running...";
    }
}

class Fish
{
    public function swin()
    {
        echo "This fish is swimming...";
    }
}

function app(Dog $obj)
{
    $obj->run();
}

app(new Dog);
app(new Fish);