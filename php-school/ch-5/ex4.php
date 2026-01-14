<?php

function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

echo "Enter term: ";
$term = readline();

for ($i = 0; $i < $term; $i++) {
    echo fibonacci($i) . " ";
}