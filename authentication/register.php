<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "VT323", monospace;
            background: lightgrey;
            font-size: 20px;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            width: 100%;
        }

        .form-group {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group>input {
            width: 70%;
        }

        .btn,
        input {
            padding: 4px;
            border-radius: 4px;
        }

        h1 {
            font-size: 2rem;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Ashmoon World, <?= $username; ?>
        </h1>
        <p>Regsiter below to enter Ashmoon World.</p>
        <form method="POST">
            <div class="form-group">
                <label for="username">Username</label><br>
                <input type="text" name="username" id="username" placeholder="Enter your name" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" placeholder="Enter your email" required>

            </div>

            <div class="form-group">
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Enter your password" required>

            </div>
            <button class="btn" type="submit">Sign in</button>
        </form>
        <small>Already have an account? <a href="login.php">Sign up</a></small>
    </div>
</body>

</html>