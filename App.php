<?php

include('autoload.php');

use Library\Helper\Calculator as A;
use Library\Helper\Basic\Math as B;

$calc = new A;
$calc2 = new B;
echo $calc->add([1,2]) . "\n";
echo $calc2->Times(2, 3) . "\n----------------\n End \n----------------\n";