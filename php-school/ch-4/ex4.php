<?php

$my_array = array("abcd", "abc", "de", "hjjj", "g", "wer");
$length = array_map('strlen', $my_array);

$shortest = min($length);
$longest = max($my_array);

echo "The length of the shortest string is: " . $shortest . "<br>";
echo "The length of the longest string is: " . $longest;