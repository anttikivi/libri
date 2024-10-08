<?php

use App\Router;
use App\Session;

const BASE_PATH = __DIR__ . '/../';

session_start();

require BASE_PATH . 'vendor/autoload.php';
require BASE_PATH . 'functions.php';
require BASE_PATH . 'bootstrap.php';

$router = new Router();

require BASE_PATH . 'routes.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

try {
    $router->route($uri, $method);
} catch (Exception $exception) {
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

Session::unflash();
