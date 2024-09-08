<?php

namespace App;

class Session
{
    public static function flash(string $key, string $value): void
    {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash(): void
    {
        unset($_SESSION['_flash']);
    }
}
