<?php

$ages = [19, 20, 22, 25, 18, 14, 15, 16, 17];

$adults = array_filter($ages, function ($ages) {
    return $ages > 18;
});

print_r($adults);