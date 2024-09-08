<?php

namespace App;

class App
{
    // @type \App\Container
    protected static $container;

    // @param $container
    public static function setContainer($container): void
    {
        static::$container = $container;
    }

    public static function container(): Container
    {
        return static::$container;
    }
}
