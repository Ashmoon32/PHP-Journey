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
            "name" => "book-1",
            "author" => "author-1",
            "purchaseUrl" => "http://example1.com"
        ],
        [
            "name" => "book-2",
            "author" => "author-2",
            "purchaseUrl" => "http://example2.com"
        ]
    ];

    // foreach ($books as $book) {
    //     echo $book[0] . " is written by " . $book[1] . "<br>";
    // }
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <a href="<?php echo $book["purchaseUrl"]; ?>">
                <li>
                    <?php echo $book["name"] . " is written by " . $book["author"]; ?>
                </li>
            </a>
        <?php endforeach; ?>
    </ul>
</body>

</html>