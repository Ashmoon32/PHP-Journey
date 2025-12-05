<?php 
session_start();
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error)
{
    header('location: ../profile2.php?error=file');
    exit();
}

if ($type === "image/jpeg" or $type === "image/png") {
    // move_uploaded_file($tmp, "photos/profile.jpg");
    // header('location: ../profile.php');
    $username = $_SESSION['user']['username'];

    $filePath = "photos/" . $username . ".jpg";

    move_uploaded_file($tmp, $filePath);

    if ($username === "Ashmoon") {
        header('location: ../profile.php');
    } else {
        header('location: ../profile2.php');
    }
} else {
    header('location: ../profile.php?error=type');
}