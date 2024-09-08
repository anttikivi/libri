<?php

function base_path(string $path): string
{
    return BASE_PATH . $path;
}

function redirect(string $path)
{
    header("Location: {$path}");

    exit;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}
