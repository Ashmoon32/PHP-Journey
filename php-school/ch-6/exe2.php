<?php

class Calculator
{
    protected $val1;
    protected $val2;

    public function __construct($val1, $val2 = null)
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

class CalcAdvanced extends Calculator
{
    public function pow()
    {
        if ($this->val2 === null) {
            return "Error: Second value not provided for calculation!";
        }

        return pow($this->val1, $this->val2);
    }

    public function sqrt()
    {
        return sqrt($this->val1);
    }

    public function exp()
    {
        return exp($this->val1);
    }
}

$calc = new CalcAdvanced(3, 4);
echo "Power ( 3^4 ) = " . $calc->pow() . "<br>";
$calc = new CalcAdvanced(9);
echo "Squre root of 9 = " . $calc->sqrt() . "<br>";
echo "Exponential(e^9) = " . $calc->exp() . "<br>";

?>