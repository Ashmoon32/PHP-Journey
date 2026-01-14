<?php

function calculateRectangleArea($length, $width)
{
    return $length * $width;
}

$length = 10;
$width = 5;

echo "Length: $length <br>";
echo "Width: $width <br>";
echo "Area of Rectangle: " . calculateRectangleArea($length, $width);