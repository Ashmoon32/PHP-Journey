<?php
function factorial($number)
{
    if ($number < 2) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

echo "Factorial of 4 is: " . factorial(4);
?>