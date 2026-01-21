<?php

$nothing = fn($none = "Nothing.") => $none;
echo $nothing("do nothing");

// spaceship operator
$a = 5;
$b = 10;
$c = 12;
echo $a <=> $b;
echo $b <=> $a;
echo $b <=> $c;
echo $b <=> $b;
