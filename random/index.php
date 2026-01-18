<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime in a Nutshell | Ashmoon</title>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Dummy Nutshell!</h1>
        <h3>Search Your Favorite Anime Characters Below...</h3>
        <form action="" method="GET">
            <label for="characterName">Enter Character Name</label> <br>
            <input type="text" name="characterName" id="characterName" required> <br><br>

            <input type="submit" value="Search" name="search">
        </form>

        <div class="output">
            <?php
            $characterName = $_GET['characterName'];
            $validInput = isset($characterName) ? $characterName : '';

            $characterList = [
                'name' => 'light yagami',
                'gender' => 'male',
                'power' => 'genius, manipulation'
            ];
            foreach ($characterList as $character) {
                echo $character;
            }

            ?>
        </div>
    </div>
</body>

</html>