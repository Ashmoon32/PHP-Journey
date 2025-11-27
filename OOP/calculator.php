<?php

trait Math
{
    public function add($a, $b)
    {
        if (is_numeric($a) && is_numeric($b))
        {
            echo "The addition of the number $a and $b is : " , $a + $b , ".\n";
        } else {
            echo "Invalid Input! Please enter a number.\n";
        }
        
    }

    public function subtract($a, $b)
    {
        if (is_numeric($a) && is_numeric($b))
        {
            echo  "The substraction of the number $a and $b is : " , $a - $b , ".\n";
        } else {
            echo "Invalid Input! Please enter a number.\n";
        }
        
    }

    public function multiply($a, $b)
    {
        if (is_numeric($a) && is_numeric($b))
        {
            echo "The multiplication of the number $a and $b is : " , $a * $b , ".\n";
        } else {
            echo "Invalid Input! Please enter a number.\n";
        }
         
    }

    public function divide($a, $b)
    {
        if (is_numeric($a) && is_numeric($b))
        {
            if ($b == 0) 
            {
                echo "Undefined result! Cannot divided by 0.";
            } else {
                echo "The division of the number $a and $b is : " , $a / $b , ".\n";
            }
        } else {
            echo "Invalid Input! Please enter a valid number.";
        }
    }
}

trait Area
{
    private $PI = 3.142857;

    public function circle($r)
    {
        if (is_numeric($r))
        {
            echo "The area of the circle is : " , $this->PI * $r * $r , ".\n";
        } else {
            echo "Invalid Input! Please enter a number.\n";
        }
     
    }
}

trait Escape
{
    public function exit()
    {
        echo "Bye Bye.. Have a great day!\n";
    }
}

class Calculator
{
    use Math, Area, Escape;

    public function __construct()
    {
        echo "\nPlease Enter the number of the calculation you want!(eg. Enter \"1\" for addition)\n";
        echo "--------------------------------------------------------\n";
        echo "Available Calculation\n";
        echo "
        1. Addition 
        2. Substraction
        3. Multiplication
        4. Division
        5. Area of Circle
        6. Exit
        \n";
        echo "---------------------------------------------------------\n";

    }
}

$calculator = new Calculator;

    do
    {
        $choice = 0;
        while(!($choice == 6))
        {
            $choice = readline("Enter your choice : ");
            switch($choice)
            {
                case 1:
                    $calculator->add(
                        $num1 = readline("Enter your first number: "),
                        $num2 = readline("Enter your second number: ")
                    );
                    break;
                
                case 2:
                    $calculator->subtract(
                        $num1 = readline("Enter your first number: "),
                        $num2 = readline("Enter your second number: ")
                    );
                    break;
                case 3:
                    $calculator->multiply(
                        $num1 = readline("Enter your first number: "),
                        $num2 = readline("Enter your second number: ")
                    );
                    break;
                case 4:
                    $calculator->divide(
                        $num1 = readline("Enter your first number: "),
                        $num2 = readline("Enter your second number: ")
                    );
                    break;

                case 5:
                    $calculator->circle(
                        $radius = readline("Enter radius: ")
                    );
                    break;
                
                case 6:
                    $calculator->exit();
                    break;

                default :
                    echo "Invalid choice! Please Enter the number for choice from 1 to 5.\n";         
            }
        }
    } while (!(is_numeric($choice)));