<?php

class Animal 
{
    public $name;
    private $age;

     public function run()
    {
        echo "$this->name is running...\n";
        return $age_clone = $this->age;
    }

    public function bark()
    {
        echo "$this->name is barking.. Woof... Woof..\n";
        
    }

    public function __construct()
    {
        echo "Creating an object.";
    }
}

$dog = new Animal;
$dog->name = "Bobby";
$dog->run();
$dog->bark();

function add($a, $b){
    echo $a + $b;
}

$result = add(1,2);
echo $result;


function add1($a, $b){

}