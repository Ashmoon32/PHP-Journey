<?php
require 'controller.php';

$result = null;

if (isset($_GET['character']) && !empty($_GET['character'])) {
    $result = searchCharacter($_GET['character'], $animeCharacters);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">

    <?php if ($result): ?>

        <!-- Card -->
        <div class="bg-gray-800 rounded-xl shadow-lg p-6 w-80 space-y-4 animate-fade-in">

            <img src="<?= $result['image']; ?>" class="rounded-lg w-full h-64 object-cover">

            <h2 class="text-xl font-bold">
                <?= $result['name']; ?>
            </h2>

            <p class="text-gray-400">
                Anime: <?= $result['anime']; ?>
            </p>

            <p>Power: <?= $result['power']; ?></p>
            <p>Personality: <?= $result['personality']; ?></p>

            <a href="index.php" class="block text-center mt-4 text-purple-400 hover:underline">
                Search again
            </a>
        </div>

    <?php else: ?>

        <p>❌ Character not found.</p>

    <?php endif; ?>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out;
        }
    </style>

</body>

</html>