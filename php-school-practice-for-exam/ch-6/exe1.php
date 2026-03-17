<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>

    <h1>Calculator - Ashmoon</h1>
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
            if ($this->val2 === 0) {
                return "Error: Can't divide by zero!";
            }
            return $this->val1 / $this->val2;
        }
    }

    $calc = new Calculator(3, 4);
    echo "Addition: " . $calc->add() . "<br>";
    echo "Subtraction: " . $calc->subtract() . "<br>";
    echo "Multiplication: " . $calc->multiply() . "<br>";
    echo "Division: " . $calc->divide() . "<br>";


    ?>
</body>

</html>