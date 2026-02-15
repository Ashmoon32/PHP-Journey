<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Page</title>
</head>

<body>
    <form action="" method="POST">
        Name: <input type="text" name="name" required> <br>
        Price: <input type="number" name="price" required> <br>
        Category: <input type="text" name="category" required> <br>
        <input type="submit" name="submit" value="Add Product">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("INSERT INTO products(name, price, category) VALUES (:name, :price, :category)");
            $stmt->execute([
                ':name' => $_POST['name'],
                ':price' => $_POST['price'],
                ':category' => $_POST['category']
            ]);
            echo "Product inserted successfully!";

        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }
    ?>

    <br>
    <a href="index.php">View All Products</a>
</body>

</html>