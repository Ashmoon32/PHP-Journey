<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project', 'root', '', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$statement = $db->query('SELECT * FROM roles');
$sql = "INSERT INTO roles(name, value) VALUES ('Supervisor', 4)";
$db->query($sql);


$row1 = $statement->fetch();
$row2 = $statement->fetch();

print_r($row1);
print_r($row2);
echo "\n";
echo $db->lastInsertId();

$sql1 = "INSERT INTO roles ( name, value ) VALUES ( :name, :value )";

$statement2 = $db->prepare($sql1);

$statement2->execute([
    'name' => "God",
    'value' => 999
]);

echo $db->lastInsertId();