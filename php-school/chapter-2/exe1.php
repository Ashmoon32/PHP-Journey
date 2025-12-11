<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Electricity Bill</title>
    <link rel="stylesheet" href="1_style.css">
</head>

<body>
    <div class="container">
        <h1>Electricity Bill Calculator</h1>

        <form action="" method="get">
            Enter Number of Units Consumed:
            <input type="number" name="Units" required>
            <button type="submit">Calculate</button>
        </form>
    
    

        <?php
            
            if(isset($_GET['Units']))
            {
                $units = $_GET['Units'];
                $bills = 0;

                if ($units <= 50) {
                    $bills = $units * 50;
                } elseif ($units <= 100) {
                    $bills = ( 50 * 50) + (($units - 50) * 100);
                } elseif ($units <= 200) {
                    $bills = ( 50 * 50 ) + ( 50 * 100 ) + (($units - 100) * 150);
                } else {
                    $bills = ( 50 * 50 ) + ( 50 * 100 ) + ( 100 * 150 ) + (($units - 200) * 300);
                }

                echo "<h3 class = 'result'> Total Bills: $bills Ks </h3>";
            }
        ?>
    </div>
</body>
</html>
