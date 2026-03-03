<?php

$name = $_POST['name'];
$email = $_POST['email'];

echo "Name: " . htmlspecialchars($name) . "<br>";
echo "Email: " . htmlspecialchars($email);

?>