<?php
$radius = 5;
$diameter = 2 * $radius;
$circumference = M_PI * $diameter;
$area = M_PI * pow($radius, 2);
echo "For a circle with radius" . $radius . "<br>";
echo "The diameter is " . $diameter . "<br>";
echo "The circumference is " . $circumference . "<br>";
echo "The area is " . $area . "<br>";
?>