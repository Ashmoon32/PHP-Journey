<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=dummy_db", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connect";
} catch (PDOException $exception) {
    echo "ERROR: " . $exception->getMessage();
}