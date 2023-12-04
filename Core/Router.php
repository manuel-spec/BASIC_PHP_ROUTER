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
}
