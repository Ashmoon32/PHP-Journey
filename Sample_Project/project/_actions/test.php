<?php
include("../vendor/autoload.php");
use Libs\Database\MySQL;

echo "Testing database connection...\n";

$mysql = new MySQL();
$connection = $mysql->connect();

if ($connection instanceof PDO) {
    echo "✓ Database connection successful!\n";
} else {
    echo "✗ Database connection failed: $connection\n";
    exit(1);
}