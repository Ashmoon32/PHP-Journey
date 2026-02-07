<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "VT323", monospace;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Ashmoon World, <?= $username; ?>
        </h1>
        <p>Regsiter below to enter Ashmoon World.</p>
        <form method="POST">
            <label for="name">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <button type="submit">Sign in</button>
        </form>
        <small>Already have an account? <a href="login.php">Sign up</a></small>
    </div>
</body>

</html>