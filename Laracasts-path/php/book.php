<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
</head>

<body>
    <?php
    $books = [
        [
            "name" => "How to breath?",
            "author" => "Ashmoon",
            "releaseYear" => "2005",
            "purchaseUrl" => "http://example1.com"
        ],
        [
            "name" => "The depression",
            "author" => "Ashmoon",
            "releaseYear" => "2026(ongoing)",
            "purchaseUrl" => "http://example2.com"
        ],
        [
            "name" => "Easy Loving",
            "author" => "Win Kyi",
            "releaseYear" => "2025-2026",
            "purchaseUrl" => "http://example3.com"
        ],
        [
            "name" => "The Mogger",
            "author" => "Wai Yan",
            "releaseYear" => "2004",
            "purchaseUrl" => "http://example4.com"
        ]
    ];

    // foreach ($books as $book) {
    //     echo $book[0] . " is written by " . $book[1] . "<br>";
    // }
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <?php if ($book["author"] == "Ashmoon"): ?>
                <a href="<?php echo $book["purchaseUrl"]; ?>">
                    <li>
                        <?php echo $book["name"] . " is written by " . $book["author"]; ?>
                    </li>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>