<?php

class Calculator
{
    private $val1;
    private $val2;

    public function __construct($val1, $val2)
    {
        $this->val1 = $val1;
        $this->val2 = $val2;
    }


    public function add()
    {
        return $this->val1 + $this->val2;
    }

    public function subtract()
    {
        return $this->val1 - $this->val2;
    }

    public function multiply()
    {
        return $this->val1 * $this->val2;
    }

    public function divide()
    {
        if ($this->val2 == 0) {
            return "Can't divide by Zero!";
        }
        return $this->val1 / $this->val2;
    }
}

$calc = new Calculator(3, 4);
echo $calc->add() . "<br>";
echo $calc->subtract() . "<br>";
echo $calc->multiply() . "<br>";
echo $calc->divide() . "<br>";
?>