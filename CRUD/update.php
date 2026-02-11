<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation | Update</title>
</head>

<body>
    <h2>Update fruit by name</h2>
    <form action="" method="POST">
        <label for="name">Fruit name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter fruit name" required><br><br>

        <label for="color">Fruit color</label><br>
        <input type="text" name="color" id="color" placeholder="Enter fruit color" required><br><br>

        <input type="submit" name="update" value="Update Fruit">
    </form>

    <?php

    try {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);
            $color = trim($_POST['color']);

            $sql = "UPDATE fruits SET color = :color WHERE name = :name";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':color', $color);
            $stmt->bindParam(':name', $name);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<p style='color: green;'>Fruit updated successfully!</p>";
            } else {
                echo "<p style='color: orange;'>No fruit found with that name.</p>";
            }
        }
    } catch (PDOException $e) {
        echo "<p style='color: red;'>Error" . $e->getMessage() . "</p>";
    }


    require_once 'footer.php';
    ?>
</body>

</html>