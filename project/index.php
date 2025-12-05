<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }

        .register-btn {
           color: #fff;
           text-decoration: none;
           background: #0B5ED7;
           padding: 10px;
           border-radius: 7px;
           font-size: 1.1rem;
        }

        .register-btn:hover {
            background: #1b6ce5ff;
            color: #fff;
        }
    </style>
</head>
<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>

        <?php if ( isset($_GET['incorrect']) ) : ?>
            <div class="alert alert-danger">
                Incorrect Email or Password
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <input 
                type="email"
                name="email"
                class="form-control mb-2"
                placeholder="Email" required
            >
            <input 
                type="password"
                name="password"
                class="form-control mb-2"
                placeholder="Password" required
            >
            <button type="submit"
                class="w-100 btn btn-lg btn-primary">
                Login
            </button>
        </form>
        <br>

        <a href="register.php" class="register-btn">Register</a>
    </div>
</body>
</html>