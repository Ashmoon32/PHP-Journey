<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

require __DIR__ . "/core/Router.php";
require __DIR__ . "/core/Middleware.php";

require __DIR__ . "/controllers/HomeController.php";
require __DIR__ . "/controllers/AuthController.php";
require __DIR__ . "/controllers/DashboardController.php";

$router = new Router();

$router->get("/", [HomeController::class, "index"]);
$router->get("/login", [AuthController::class, "showLogin"]);
$router->post("/login", [AuthController::class, "Login"]);
$router->get("/dashboard", [DashboardController::class, "index"], ["auth"]);
$router->get("/logout", [AuthController::class, "logout"]);

$router->resolve();
?>