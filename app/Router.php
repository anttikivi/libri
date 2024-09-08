<?php

namespace App;

use App\Middleware\Middleware;

class Router
{
    protected array $routes = [];

    public function add(string $method, string $uri, string $controller): Router
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null,
        ];

        return $this;
    }

    public function get(string $uri, string $controller): Router
    {
        return $this->add('GET', $uri, $controller);
    }

    public function route(string $uri, string $method): ?string
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                return require base_path('controllers/' . $route['controller']);
            }
        }

        $this->abort();
    }

    public function previousUrl(): string
    {
        return $_SERVER['HTTP_REFERER'];
    }

    protected function abort(int $code = 404): void
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        exit;
    }
}
