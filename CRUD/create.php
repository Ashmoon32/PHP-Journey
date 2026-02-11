<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD operation | Create</title>
</head>

<body>
    <h2>Add any fruit and its color as much as you want</h2>
    <form action="" method="POST">
        <label for="fruits">Fruit</label><br>
        <input type="text" name="fruits" id="fruits" placeholder="Enter the fruit name" required><br><br>

        <label for="color">Color</label><br>
        <input type="text" name="color" id="color" placeholder="Enter fruit color" required><br><br>

        <input type="submit" name="submit" value="Add fruit">
    </form>

    <?php

    try {

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $fruits = $_POST['fruits'];
            $color = $_POST['color'];

            $sql = "INSERT INTO fruits ( name, color) VALUES (:name, :color)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $fruits);
            $stmt->bindParam(':color', $color);
            $stmt->execute();
            echo "<p>Fruit added successfully!</p>";
        }

    } catch (PDOException $e) {
        echo "An unexpected error occurred! " . $e->getMessage();
    }

    require_once 'footer.php';
    ?>
</body>

</html>