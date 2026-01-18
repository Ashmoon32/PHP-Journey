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
            "book-1",
            "author-1",
            "http://example1.com"
        ],
        [
            "book-2",
            "author-2",
            "http://example2.com"
        ]
    ];

    foreach ($books as $book) {
        echo $book[0] . " is written by " . $book[1] . "<br>";
    }
    ?>
</body>

</html>