<?php
include("classes/Libs/Database/MySQL.php");
include("classes/Libs/Database/UsersTable.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

try {
    $mysql = new MySQL();
    $table = new UsersTable($mysql);
    echo "Database connection successful!";
} catch (Exception $e) {
    echo "Database connection failed: " . $e->getMessage();
}