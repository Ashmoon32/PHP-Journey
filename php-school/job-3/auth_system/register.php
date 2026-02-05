<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page | Ashmoon</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <h1>Welcome To the Ashmoon World.</h1>
    <p>To enter amazing Ashmoon's dashboard, you need an authenticated account. If you don't have one, Register
        below🙌👇</p>
    <form method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Enter your name" required><br><br>

        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your email" required><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password" required><br><br>

        <button type="submit">Sign up</button>
    </form>
</body>

</html>