<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Shop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #f5f4f5f4;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px 5px rgba(0, 0, 5, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $books = [
            "The Great Gatsby by F. Scott Fitzgerald",
            "To Kill a Mockingbird by Harper Lee",
            "1984 by George Orwell",
            "Pride and Prejudice by Jane Austen",
            "The Catcher in the Rye by J.D. Salinger"
        ];
        ?>
        <h1>Hello! Welcome to our book shop.</h1>
        <p>We have a variety of books available for you. Feel free to browse and select your favorites!</p>
        <h3>Below the list of books:</h3>

        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <?= $book ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>