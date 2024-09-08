<?php

function base_path(string $path): string
{
    return BASE_PATH . $path;
}

function redirect(string $path)
{
    header("location: {$path}");
    exit();
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}
