<?php

class Middleware
{
    public static function handle($type)
    {

        if ($type === "auth") {
            if (!isset($_SESSION['user'])) {
                header("Location: /login");
                exit;
            }
        }
    }
}