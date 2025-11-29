<?php

include("Calculator.php");
use Library\Helper\Math\Basic\Calculator as Math;
$calc1 = new Math;
$calc3 = new Math;

echo $calc1->add([1,2,3]) , "\n";

