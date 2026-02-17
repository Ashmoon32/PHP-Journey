<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete
    </title>
</head>
<form action="" onsubmit="return confirm('Are you sure want to delete this product?');" method="POST">
    Product ID to delete: <input type="number" name="id" required><br>
    <input type="submit" name="delete" value="Delete Product">
</form>
<?php
if (isset($_POST['delete'])) {
    $pdo = new PDO("mysql:host=localhost;dbname=my_database", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $stmt->execute([
        ':id' => $_POST['id']
    ]);
    if ($stmt->rowCount() > 0) {
        echo "Product deleted!";
    } else {
        echo "Product Id doesn't exit!";
    }
}


require_once 'footer.php';
?>
</body>

</html>