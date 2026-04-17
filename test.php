<?php

include('Library/Helper/Calculator.php');

use Library\Helper\Calculator;

$calc = new Calculator;
echo $calc->add([1, 2]);
echo "\n";

// print_r($_SERVER);

$a = "a";
$b = [1, 2, 3];
echo strlen($a) . "\n";
echo count($b);


function nothing($nth)
{
    return $nth;
}

echo nothing("Absolutely Do Nothing");