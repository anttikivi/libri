<?php

use App\App;
use App\Container;

$container = new Container();

// TODO: Bind the database.

App::setContainer($container);
