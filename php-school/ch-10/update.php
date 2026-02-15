<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Page</title>
</head>

<body>
    <form action="" method="POST">
        Prodcut ID <input type="number" name="name" required><br>
        New Price <input type="number" name="price" step="0.01" required><br>
        New Category <input type="text" name="category" required><br>
        <input type="submit" name="submit" value="Update Product">
    </form>
    <?php


    if (isset($_POST['submit'])) {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
            $stmt = $pdo->prepare("UPDATE products SET price = :price, category = :category WHERE id = :id");
            $stmt->execute([
                ':id' => $_POST['id'],
                ':price' => $_POST['price'],
                ':category' => $_POST['category']
            ]);
            if ($stmt->rowCount() > 0) {
                echo "Updated Product!";
                echo "<a href='index.php'>View All Products</a>";
            } else {
                echo "An unexpected error occurred!";
            }
        } catch (PDOException $e) {
            echo "Err" . $e->getMessage();
        }
    }

    ?>
</body>

</html>