<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num = [1, 2, 3, 4, 5];
    
    function two($n) {
        return $n * 2;
    }

    $result = array_map("two", $num);

    print_r($result);
    ?>

    <br><hr><br>

    <?php 
        $num2 = [ 1, 2, 3, 4, 5];

        $results = array_map( function($n) {
            return $n * 2;
        }, $num2);
        
        print_r($results);
    ?>

    <br><hr><br>

    <?php 
        $two = function($n) {
            echo $n * 2;
        };

        $two(2);
    ?>

    <br><hr><br>

    <?php 
        $name = "Ashmoon";
        $hello = function() use ($name) {
            $name = "bob";
            echo "Hello $name!";
        };

        $hello();
        echo $name;

        ?>

        <br><hr><br>
        <?php

        $two = fn ($n) => $n * 2;

        echo $two(3);


        ?>

        <br><hr><br>

        <?php
    $x = 4;
    $add11 = fn($y) => $y + $x;

    echo $add11(3);
    ?>

    <hr><br>

    <?php 
        function profile($name, $age, $email) {
            echo "$name ($age) @ $email";
        }

        profile("Alice", 20, "alice3021@gmail.com")
    ?>

    <br><hr>
    <?php 
        profile(
            age: 21,
            name: "blabla",
            email: "blabla21@gmail.com",
        )
    ?>

</body>
</html>