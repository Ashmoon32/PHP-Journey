<?php
require_once 'connect.php';
require_once 'header.php';

try {

    $stmt = $pdo->query("SELECT * FROM fruits");

    echo "<h2>Fruits Table</h2>";
    echo "<table cellpadding ='5' border ='1'> ";
    echo "
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Color</th>
      </tr>
     ";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['color']) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} catch (PDOException $e) {
    echo "An unexpect error occurred! " . $e->getMessage();
}

require_once 'footer.php';
?>