<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Page | Ashmoon</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Dashboard,
            <?= $_SESSION['username']; ?>
        </h1>
        <p>Now you are authenticated.</p>
        <p>What is your agenda today?</p>
        <textarea name="messages" cols="23" rows="3"
            style="resize:none; border: 2px solid black; border-radius: 10px; padding: 10px">
        </textarea><br>
        <a href="logout.php">
            <button id="btn">Logout</button>
        </a>
    </div>
    <script>
        let btn = getElementById('btn');
        btn.onclick()
    </script>
</body>

</html>