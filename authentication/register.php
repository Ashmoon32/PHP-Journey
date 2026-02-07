<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>
    <h1>Welcome to the Ashmoon World, <?= $username; ?></h1>
    <p>Regsiter below to enter Ashmoon World.</p>
    <form action="" method="POST">
        <label for="name">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your name" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>

        <button type="submit">Sign in</button>
    </form>
</body>

</html>