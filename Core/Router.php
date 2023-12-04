<?php

namespace Core;

class Router
{
    public $routes = [];
    public function get($uri, $controller)
    {
        $this->routes = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => "GET"
        ];
    }
    public function route($uri)
    {
        foreach ($this->routes as $route) {
            if ($this->routes['uri'] == $uri) {
                return require(__DIR__ . "\\..\\controllers\\" . $this->routes['controller']);
            }
        }
    }
}
