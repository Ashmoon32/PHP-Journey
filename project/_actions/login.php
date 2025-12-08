<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'ashmoon32@gmail.com' and $password === 'ashmoon32') {
    $_SESSION['user'] = ['username' => 'Ashmoon'];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect=1');
}