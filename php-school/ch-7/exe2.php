<?php
$selectedHobbies = [];
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['hobbies'])) {
    $selectedHobbies = $_POST['hobbies'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label><input type="checkbox" name="hobbies[]" value="Reading">Reading</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Traveling">Traveling</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Gaming">Gaming</label><br>
        <label><input type="checkbox" name="hobbies[]" value="Cooking">Cooking</label><br>
        <input type="submit" value="Submit"><br><br>
    </form>

    <?php
    if (!empty($selectedHobbies)): ?>
        <h2>Your selected hobbies: </h2>
        <ul>
            <?php foreach ($selectedHobbies as $hobby): ?>
                <li><?= htmlspecialchars($hobby) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>

</html>