<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Insert Form</title>
</head>

<body>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Price: <input type="number" step="0.01" name="price" required><br>
        Category: <input type="text" name="category" required><br>
        <input type="submit" name="submit" value="Add Product"><br>
    </form>
</body>

</html>