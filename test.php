<?php

include('Library/Helper/Calculator.php');

use Library\Helper\Calculator;

$calc = new Calculator; 
echo $calc->add([1,2]);

print_r($_SERVER);
