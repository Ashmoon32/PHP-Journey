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



function substract($a, ...$c) {
    print_r($c);
}


substract(1, 2, 3, 4, 5, 6);

function add3(Array $nums) : float {
    return array_sum($nums);
}

echo add3([2,2]), "\n";

function price(string|int|float $n) {
    return "Price is \$$n";
}

echo price(2) , "\n";
echo price(3.1)  , "\n";
echo price("abcd"), "\n";


$stu_age = "Mg Mg";
function name(&$n){
    $n = "Ko Ko";
    echo $n;
}

name($stu_age);
echo "\n", $stu_age, "\n";

echo "\n-----------------------------------\n";

$nums = [1, 2, 3, 4, 5];

function two($n) {
    return $n * 2;
}

$result = array_map("two", $nums);

print_r($result);