<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <script>
        function clearFields()
        {
            document.getElementById("first_num").value = "";
            document.getElementById("second_num").value = "";
            document.getElementById("result").value = "";
        }
    </script>
</head>
<body>
    <?php 
    
        $first_num = isset($_POST['first_num']) ? $_POST['first_num'] : '';
        $second_num = isset($_POST['second_num']) ? $_POST['second_num'] : '';
        $operator = isset($_POST['operator']) ? $_POST['operator'] : '';
        $result = "";

        if(is_numeric($first_num) && is_numeric($second_num))
        {
            switch($operator)
            {
                case "Add":
                    $result = $first_num + $second_num;
                    break;

                case "Subtract":
                    $result = $first_num - $second_num;
                    break;

                case "Multiply":
                    $result = $first_num * $second_num;
                    break;

                case "Divide":
                    if($second_num != 0)
                    {
                        $result = $first_num / $second_num;
                    } else {
                        $result = "Cannot divided by zero";
                    }
                    break;
                
                default:
                    $result = "Invalid Operator Selected!";
            }
        } else {
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $result = "Please Enter Valid Numeric Values!";
            }
        }
    ?>
    <div id="calculator">
        <h1>Simple Calculator</h1>
        <form action="" method="post">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo $first_num; ?>">
                <b>First Number</b>
            </p>

            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo $second_num; ?>">
                <b>Second Number</b>
            </p>

            <p>
                <input readonly="readonly" name="result" id="result" value="<?php echo $result; ?>">
                <b>Result</b>
            </p>

            <input type="submit" name="operator" value="Add">
            <input type="submit" name="operator" value="Subtract">
            <input type="submit" name="operator" value="Multiply">
            <input type="submit" name="operator" value="Divide">
            <input type="button" value="Clear" onclick="clearFields()">
        </form>
    </div>
</body>
</html>