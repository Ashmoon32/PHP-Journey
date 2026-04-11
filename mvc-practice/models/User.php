<?php

class User
{
    public static function find($username, $password)
    {
        $users = [
            ["username" => "admin", "password" => "Admin123@#"]
        ];

        foreach ($users as $user) {
            if ($user["username"] === $username && $user["password"] == $password) {
                return $user;
            }
        }

        return null;
    }
}