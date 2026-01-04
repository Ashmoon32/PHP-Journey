<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Electricity Bill</title>
</head>
<body>
    <h2>Electricity Bill Calculator</h2>
    <form action="" method="post">
        <label for="units">Enter Number of Units Consumed:</label>
        <input type="number" name="units" id="units" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php

    if(isset($_POST["submit"]))
    {
        $units = $_POST["units"];
        $bills = 0;

        if($units <= 50){
            $bills = $units * 50;
        } else if ($units > 50 && $units <= 100){
            $bills = $units * 100;
        } else if ($units > 100 && $unis <= 200){
            $bills = $units * 150;
        } else {
            $bills = $units * 300;
        }

        echo "<h3>Total Bill: $bills Ks</h3>";
    }

    ?>
    
</body>
</html>