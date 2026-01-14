<?php

function isPrime($n)
{
    if ($n <= 1)
        return false;

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0)
            return false;
    }

    return true;
}

try {
    $isTrue = true;
    do {
        echo "Enter the number : ";
        $check = readline();
        if (isPrime($check)) {
            echo "$check is a prime number. \n";
        } else {
            echo "$check is not a prime number. \n";
        }

        $err = true;
        while ($err) {
            echo "Do you want to exit?(Y/N): ";
            $exit = readline();
            if ($exit == "Y" || $exit == "y") {
                echo "Bye! Have a great day... \n";
                $isTrue = false;
                $err = false;
            } else if ($exit == "N" || $exit == "n") {
                $isTrue = true;
                $err = false;
            } else {
                echo "Please enter \"Y\" or \"y\" or \"N\" or \"n\" \n";
            }
        }
    } while ($isTrue);
} catch (Exception $e) {
    echo "An Unexpected Error Occurred: " . $e->getMessage();
}