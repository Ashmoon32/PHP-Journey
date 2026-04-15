<?php

use PhpParser\Node\Stmt\Global_;

function sum(array $a, $b): float
{
    return array_sum($b) + array_sum($a);
}

echo sum([1, 2], [2, 6]);

$name = "mgmg";

function hello($n)
{
    echo "My name is $n";
    global $name;
    echo "his name is $n";
    echo "his name is " . $GLOBALS['name'];
}

hello($name);
echo $name;
echo $n;

echo "\n \n \n";

$name = "mgmg";

function blabal(&$n)
{
    echo "hello " . $n;
    $n = "koko";
}

blabal($name);
blabal($name);


echo $name;


echo "\n \n";

function one()
{
    function two()
    {
        function three()
        {
            function four()
            {
                function five()
                {
                    function six()
                    {
                        function seven()
                        {
                            function eight()
                            {
                                function nine()
                                {
                                    function ten()
                                    {
                                        function eleven()
                                        {
                                            function twelve()
                                            {
                                                echo "⭐⭐⭐💕💕💕I love you in every nested function💕💕💕⭐⭐⭐";
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}

one();
two();
three();
four();
five();
six();
seven();
eight();
nine();
ten();
eleven();
twelve();

function addition(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

echo addition(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
?>