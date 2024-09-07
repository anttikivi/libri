<?php

namespace App;

class Router
{
    protected $routes = [];

    public function add(string $method, string $uri, string $controller): Router
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];

        return $this;
    }

    public function get(string $uri, string $controller): Router
    {
        return $this->add('GET', $uri, $controller);
    }
}
