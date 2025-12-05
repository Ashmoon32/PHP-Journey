<?php


    session_start();

    if(!isset($_SESSION['user'])) {
        header('location: index.php');
        exit();
    }

    $username = $_SESSION['user']['username'];
$photo = "_actions/photos/" . $username . ".jpg";

if (file_exists($photo)) {
    echo "<img src='$photo' width='200' class='img-thumbnail mb-3'>";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
                    content="width=device-width, initial-scale=1.0">
        <title>Profile-2 | Nyein Maung</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-3">Nyein Maung (Front End Engineer)</h1>

                <!-- Files Upload Section -->

            <?php if(isset($_GET['error'])) : ?>
                <div class="alert alert-warning">
                    Cannot upload file
                </div>
            <?php endif ?>

            <?php if(file_exists('_actions/photos/profile.jpg')) : ?>
                <img src="_acitons/photos/profile.jpg" alt="Profile Photo" width="200" class="img-thumbnail mb-3">
            <?php endif ?>

            <form action="_actions/upload.php" method="post"
            enctype="multipart/form-data">
                <div class="input-group mb-3">
                    <input type="file" name="photo" class="form-control">
                    <button class="btn btn-secondary">Upload</button>
                </div>
            </form>

            
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
