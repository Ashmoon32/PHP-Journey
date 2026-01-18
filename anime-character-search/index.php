<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime in a Nutshell | Ashmoon</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">

    <div class="text-center space-y-6 animate-fade-in">

        <h1 class="text-3xl font-bold">Anime in a Nutshell</h1>

        <h4 class="text-gray-400">Search your favorite anime character.</h4>

        <form action="card.php" method="GET" class="flex gap-3 justify-center">

            <input type="text" name="character" placeholder="e.g. Light Yagami" required
                class="px-4 py-2 rounded-md bg-gray-800 border border-gray-700 focus:outline-none focus:ring-2 focus:ring-purple-500">

            <button type="submit" class="px-5 py-2 bg-purple-600 hover:bg-purple-700 rounded-md transition">
                Search
            </button>
        </form>
    </div>

    <!-- animatioon -->
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</body>

</html>