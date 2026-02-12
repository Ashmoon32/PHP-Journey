<?php
require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation | Delete</title>
</head>

<body>
    <h2>Delete Fruit By Name</h2>
    <form action="" method="POST">
        <label for="name">Fruit Name (to delete)</label><br>
        <input type="text" name="name" id="name" placeholder="Enter fruit name to delete" required> <br><br>
        <input type="submit" name="delete" value="Delete">
    </form>

    <?php
    try {
        if ($_SERVER['REQUEST__METHOD'] == 'POST' && isset($_POST['delete'])) {
            $name = trim($_POST['name']);

            $sql = "DELETE FROM fruits WHERE name = :name";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "<p style='color: green;'>Fruit deleted successfully.</p>";
            } else {
                echo "<p style='color: yellow;'>No fruit found with that name.</p>";
            }
        }
    } catch (PDOException $e) {
        echo "<p style='color: red;'>An unexpected error occurred - " . $e->getMessage() . " </p>";
    }
    ?>
</body>

</html>