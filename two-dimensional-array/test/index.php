<?php


$user = ['name' => 'ashmoon', 'age' => 20];
['name' => $name, 'age' => $age] = $user;
echo $name . "\n";
echo $age;

$user = ['appple', 'orange'];
$fruits = ['banana', ...$user];
print_r($fruits);

$a = 5;
$b = 10;
[$a, $b] = [$b, $a];
echo $a . "\n";
echo $b;