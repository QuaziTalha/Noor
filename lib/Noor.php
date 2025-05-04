<?php
require_once 'helpers.php';

class Noor {
    private $routes = [];

    public function get($path, $handler) {
        $this->routes['GET'][$this->normalize($path)] = $handler;
    }
    
    public function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $path = $this->normalize($uri);

        if (!isset($this->routes[$method][$path])) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        $handler = $this->routes[$method][$path];

        if (is_callable($handler)) {
            echo $handler(); // closure
        } else {
            list($controller, $methodName) = explode('@', $handler);
            require_once "controllers/{$controller}.php";
            call_user_func([$controller, $methodName]);
        }
    }

    private function normalize($uri) {
        return rtrim($uri, '/') ?: '/';
    }
}