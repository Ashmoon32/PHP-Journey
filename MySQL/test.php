<?php

$db = new PDO('mysql:dbhost=localhost;dbname=project','root','',[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
]);

$statement = $db->query("SELECT * FROM roles");

$result = $statement->fetchAll(); // fetch all data

$row1 = $statement->fetch();
$row2 = $statement->fetch();
$row3 = $statement->fetch();

// fetchObject() is same with fetch(). We want the result like Object but if we don't initialize object to fecth mod, Use fetchObject()

print_r($row1);

echo "<br>";

// Insert

$sql = "INSERT INTO roles (name, value) VALUES ('Supervisor', 4)";

$db->query($sql);

echo $db->lastInsertId();


$sql1 = "INSERT INTO roles (name, value) VALUES (:name, :value)";

$statement1 = $db->prepare($sql1);

$statement1->execute([
    'name' => 'God',
    'value' => 999
]);

echo $db->lastInsertId();