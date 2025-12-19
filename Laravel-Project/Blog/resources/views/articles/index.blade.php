<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article List</title>
</head>
<body>
    <h1>Article List</h1>
    <ul>
        @foreach($articles as $article)
            <li>{{ $article['title'] }}</li>
        @endforeach
    </ul>
</body>
</html>