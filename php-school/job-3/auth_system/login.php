<?php
session_start();

$valid_username = "Ashmoon";
$valid_password = "ashmoon322005";
$err = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === $valid_username && $pass === $valid_password) {
        $_SESSION['username'] = $user;
        header("location: dashboard.php");
        exit();
    } else {
        $err = "Incorrect username or password! Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page | Ashmoon</title>
</head>

<body>
    <h1>Login Form | Ashmoon</h1>
    <?php
    if ($err) {
        echo "<p style='color:red;'>$err</p>";
    }

    if(!isset($_SESSION['username'])) {
        echo "<p> You have been logouted"
    }
    ?>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Enter your name" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>

</html>