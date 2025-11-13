<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facade</title>
</head>
<body>
    <?php 
            class CheckOilPressure
            {
                public function check()
                {
                    echo "Oil Pressure OK.";
                }
            }  

            class CheckBreakFluid
            {
                public function check()
                {
                    echo "Break Fluid OK.";
                }
            }

            class Car 
            {
                public $oil;

                public $break;

                public function __construct()
                {
                    $this->oil = new CheckOilPressure;
                    $this->break = new CheckBreakFluid;
                }

                public function start()
                {
                    $this->oil->check();
                    $this->break->check();

                    echo "Car Engine Started.";
                }
            }

            $car = new Car;
            $car->start();
    
    ?>
</body>
</html>