<?php

const BASE_PATH = __DIR__ . "/../";

session_start();

require BASE_PATH . "vendor/autoload.php";
require BASE_PATH . "bootstrap.php";
require BASE_PATH . "routes.php";

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
