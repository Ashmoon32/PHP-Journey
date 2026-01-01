<?php
    $tasks = ["Learn PHP for 2 hours", "Do Workout for 60 minutes", "No social media at morning and before bed"];

    $hours = date("H");
    $greeting = ($hours < 12) ? "Good Morning" : "Good Day";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks Manager</title>
</head>
<body>
    
    <h1><?php echo $greeting, " Developer"; ?></h1>
    <h3>Your tasks for today:</h3>

  <ol>
     <?php foreach($tasks as $task): ?>
        <li><?php echo $task; ?></li>
    <?php endforeach; ?>
  </ol>
    

</body>
</html>