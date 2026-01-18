<?php
require_once 'controller.php';

if (isset($_GET['character']) && !empty($_GET['character'])) {
    $search = $_GET['character'];
    $result = searchCharacter($search, $animeCharacters);
} else {
    $result = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Anime Character Details</title>
</head>

<body>
    <h2>Search Result</h2>
    <?php if ($result != null): ?>

        <h3>Character Details</h3>
        <?php foreach ($result as $key => $value): ?>
            <p><strong><?php echo ucfirst($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No character found. Please try again.</p>
    <?php endif; ?>

    <a href="index.php">Back to Search</a>
</body>

</html>