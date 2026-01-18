<?php

require_once 'data.php';

function searchCharacter($searchName, $characters)
{
    $searchName = strtolower((trim($searchName)));

    if (array_key_exists($searchName, $characters)) {
        return $characters[$searchName];
    } else {
        return null;
    }
}