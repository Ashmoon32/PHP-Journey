<?php
session_start();
require_once "db.php";
$message = "";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Ashmoonstar</title>
</head>

<body>
    <h2>Login Page | Ashmoonstar</h2>
    <p>If you want to see the main page, you need to login 🫠🙌, <br> Haha Just kidding 😂😘. <b><i>Just login as Guest
                dude.
                Go ahead😁⭐...</i></b>
    </p>
    <form method="POST">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" placeholder="Enter your name dude🌙" required>
        </div>

        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter your email dude⭐" required>
        </div>

        <div>
            <label for="password">Password (I swear this is the last one🥺)</label><br>
            <input type="password" name="password" id="password" placeholder="Enter your password dude🌍" required>
        </div>

        <input type="submit" name="submit" value="Sign in(login)">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === "POST" && !isset($_POST['submit'])) {
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
    }

    ?>
    <small>Don't have an account dude? <a href="register.php">Sign up here(register)</a></small>>

    <p>Hello , hello🫠🙌! Don't want to fill neither login nor register form fields right?😂😂, Haha I know we are
        lazy
        person. <br> Just kidding😰. Here Login as Guest dude⭐. Tbh,if you login as Guest, you can't see my full
        features,
        secret page👀🤩<br> <a href="index.php">Continue as Guest🙌</a></p>
</body>

</html>