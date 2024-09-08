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
    if (!isset($attributes['is_home'])) {
        $attributes['is_home'] = false;
    }

    extract($attributes);

    require base_path('views/' . $path);
}
