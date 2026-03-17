<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Calculator</title>
</head>

<body>
    <h1>Advanced Calculator - Ashmoon</h1>
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
            if ($this->val2 === 0) {
                return "Error: Can't divide by zero!";
            }
            return $this->val1 / $this->val2;
        }
    }

    class CalcAdvanced extends Calculator
    {
        public function pow()
        {
            if ($this->val2 === null) {
                return "Error: Second value not provided for power calculation!";
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


    $cal1 = new CalcAdvanced(3, 4);
    echo "Power 3^4 : " . $cal1->pow() . "<br>";

    $cal2 = new CalcAdvanced(2);
    echo "Square of 2 : " . $cal2->sqrt() . "<br>";

    echo "Exponential (e^2) : " . $cal2->exp() . "<br>";

    ?>
</body>

</html>