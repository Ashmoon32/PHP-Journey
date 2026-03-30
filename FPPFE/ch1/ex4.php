<?php
$radius = 5;
$diameter = 2 * $radius;
$area = M_PI * pow($radius, 2);
$circumference = M_PI * $diameter;

echo "For a circle with radius " . $radius . "<br>";
echo "The diameter is " . $diameter . "<br>";
echo "The circumference is " . $circumference . "<br>";
echo "The area is " . $area;

?>