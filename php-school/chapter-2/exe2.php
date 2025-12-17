<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>

    <form action="" method="get">
        <input type="number" name="fnum" required> <b>First Number</b> <br><br>
        <input type="number" name="snum" required> <b>Second Number</b> <br><br>

        
        <div style="margin-top:10px; margin-bottom:20px; font-weight:bold; padding:5px;">
                <?php

        if (isset($_GET['operation']) && isset($_GET['fnum']) && isset($_GET['snum']))
    {
            $first_number = $_GET['fnum'];
            $second_number = $_GET['snum'];
            $result = 0;
            $operation = $_GET['operation'];

            switch($operation)
            {
                case 'add':
                    $result = $first_number + $second_number;
                    echo $first_number . " + " . $second_number . " = " . $result . "<br>";
                    break;

                case 'subtract':
                    $result = $first_number - $second_number;
                    echo $first_number . " - " . $second_number . " = " . $result . "<br>";
                    break;

                case 'multiply':
                    $result = $first_number * $second_number;
                    echo $first_number . " x " . $second_number . " = " . $result . "<br>" ;
                    break;

                case 'divide':
                    if ($second_number == 0) {
                        echo "<div style='color:red;'>ERROR : Cannot divided by zero!</div>";
                    } else {
                        $result = $first_number / $second_number;
                        echo $first_number . " ÷ " . $second_number . " = " . $result . "<br>";
                    }
                    break;

                case 'clear':
                    $result = '';
                    echo "Form Cleared! <br>";
                    break;

                default:
                    echo "Invalid Operation! <br>";
                    break;
            }
        }
    ?>
        </div>

        <button type="submit" name="operation" value="add">Add</button>
        <button type="submit" name="operation" value="subtract">Subtract</button>
        <button type="submit" name="operation" value="multiply">Multiply</button>
        <button type="submit" name="operation" value="divide">Divide</button>
        <button type="submit" name="operation" value="clear">Clear</button>
    </form>
</body>
</html>