<?php

const BASE_PATH = __DIR__ . "/../";

session_start();

require BASE_PATH . "vendor/autoload.php";
require BASE_PATH . "bootstrap.php";

$router = new \App\Router();
