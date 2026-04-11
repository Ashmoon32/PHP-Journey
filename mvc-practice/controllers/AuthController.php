<?php

require "models/User.php";
class AuthController
{

    public function showLogin()
    {
        require "views/login.php";
    }

    public function login()
    {
        $username = $_POST['username'] ?? null;
        $password = $_POST['password'] ?? null;

        if (!$username || !$password) {
            echo "Please fill all fields";
            return;
        }

        $user = User::find($username, $password);

        if ($user) {
            $_SESSION['user'] = $user;
            header("Location: /dashboard");
            exit;
        } else {
            echo "Login failed";
        }
    }

    public function logout()
    {
        session_destroy();
        header("Location: /");
    }
}