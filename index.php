<?php

use Core\Router;

class Index
{
    public  $request = $_SERVER['REQUEST_URI'];
    public $router = new Router();
}


switch ($request) {

    case '/':
        require __DIR__ . '/views/index.php';
        break;

    case '/courses':
        require __DIR__ . '/views/courses.php';
        break;

    case '/authors':
        require __DIR__ . '/views/authors.php';
        break;

    case '/about':
        require __DIR__ . '/views/about.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
