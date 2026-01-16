<?php
function isPrime($numbers)
{
    if ($numbers < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numbers); $i++) {
        if ($numbers % $i == 0) {
            return false;
        }
    }
    return true;
}

echo "Enter numbers separated by space: ";
$userInputArr = explode(" ", readline());
$primeNumbersArr = [];

foreach ($userInputArr as $n) {
    if (isPrime($n)) {
        $primeNumbersArr[] = $n;
    }
}

echo "Original Array: " . implode(" , ", $userInputArr) . "\n";
echo "_____________________________________________________________________\n";
echo "\n";
if (empty($primeNumbersArr)) {
    echo "There's no prime number in the array.\n";
} else {
    echo "Prime Numbers Array: " . implode(" , ", $primeNumbersArr) . "\n";
}
?>