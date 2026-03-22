<?php
$pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("SELECT * FROM products");
echo "<table border=1>";
echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Category</th>
        </tr>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['price']}</td>
            <td>{$row['category']}</td>
        </tr>";
}
echo "</table>";
?>