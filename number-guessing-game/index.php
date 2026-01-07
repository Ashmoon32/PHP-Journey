<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Guessing Game</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Hey.. Welcome to number guessing game!</h2>
        <form action="" method="post">
            <label for="number">Guess a number from 1 to 100: </label>
            <input type="number" name="number" id="number" required>
            <input type="submit" name="submit" id="submite" value="submit">
        </form>
    </div>

    <div class="result">
        <?php
        session_start();

        if (!isset($_SESSION['randomNumber'])) {
            $_SESSION['randomNumber'] = rand(1, 100);
            $_SESSION['guessCount'] = 0;
        }

        if (isset($_POST["submit"])) {
            $number = isset($_POST["number"]) ? $_POST["number"] : '';

            $randomNumber = $_SESSION['randomNumber'];
            $guessCount = &$_SESSION['guessCount'];
            $guessCount++;

            if (is_numeric($number)) {
                if ($number == $randomNumber) {
                    echo "Congratulations! You guessed the correct number: " . $randomNumber;
                    echo "<br>You took " . $guessCount . " attempts to guess the number.";

                    unset($_SESSION["randomNumber"]);
                    unset($_SESSION["guessCount"]);
                } else if ($number > $randomNumber) {
                    echo "Your guess is too high! Please try again.";
                } else {
                    echo "Your guess is too low! Please try again.";
                }
            } else {
                echo "Please enter a valid number.";
            }
        }

        ?>
    </div>
</body>

</html>