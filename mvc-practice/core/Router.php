<?php

class Router
{
    private $routes = [];

    public function get($path, $handler, $middleware = [])
    {
        $this->routes["GET"][$path] = [$handler, $middleware];
    }

    public function post($path, $handler, $middleware = [])
    {
        $this->routes["POST"][$path] = [$handler, $middleware];
    }

    public function resolve()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $path = strtok($_SERVER['REQUEST_URI'], '?');

        // ✅ your real base path
        $basePath = "/PHP-Journey/mvc-practice";

        // remove base path from URL
        if (str_starts_with($path, $basePath)) {
            $path = substr($path, strlen($basePath));
        }

        // if empty → make it "/"
        if ($path === "" || $path === false) {
            $path = "/";
        }

        // DEBUG (optional)
        // var_dump($path); die();

        if (!isset($this->routes[$method][$path])) {
            echo "404 Not Found!";
            var_dump($path);
            die();
        }

        [$handler, $middlewares] = $this->routes[$method][$path];

        foreach ($middlewares as $middleware) {
            Middleware::handle($middleware);
        }

        [$class, $method] = $handler;
        (new $class)->$method();
    }
}

?>