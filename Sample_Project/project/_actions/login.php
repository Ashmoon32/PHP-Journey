<?php 

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if ($email === 'john.doe@gmail.com' and $password === 'jd123pwd') {
    $_SESSION['user'] = ['username' => 'John Doe'];
    header('location: ../profile.php');
} else {
    header('location: ../index.php?incorrect=1');
}