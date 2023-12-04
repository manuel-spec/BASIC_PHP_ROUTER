<?php
require_once("vendor/autoload.php");

use Core\Router;

class Index
{
    public  $request, $router;
    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_URI'];
        $this->router = new Router();
    }

    public function route()
    {
        $this->router->get($this->request, "Controller");
    }
}

$index = new Index();
$index->route();
