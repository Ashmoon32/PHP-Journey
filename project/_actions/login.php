<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];


if ($email === 'ashmoon32@gmail.com' and $password === "ashmoon32") {
    $_SESSION['user'] = ['username' => 'Ashmoon'];
    header('location: ../profile.php');
} elseif ($email === 'nyeinmaung32@gmail.com' and $password === 'nyeinmaung32') {
    $_SESSION['user'] = ['username' => 'Nyein Maung'];
    header('location: ../profile2.php');
} else {
    header('location: ../index.php?incorrect=1');
}