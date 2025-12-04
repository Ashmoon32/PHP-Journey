<?php

    session_start();

    if(!isset($_SESSION['user'])) {
        header('location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
                    content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-3">Nyein Maung (Front End Engineer)</h1>
            <ul class="list-group">
                <li class="list-group-item">
                    <b>Email:</b> nyeinmaung32@gmail.com
                </li>
                <li class="list-group-item">
                    <b>Phone:</b> (09) 323 425 524
                </li>
                <li class="list-group-item">
                    <b>Address:</b> No. 709, Main Street, Mandalay City
                </li>
            </ul>
            <br>
            <a href="_actions/logout.php">Logout</a>
        </div>
    </body>
    </html>
