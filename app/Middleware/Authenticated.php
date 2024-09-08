<?php

namespace App\Middleware;

class Authenticated
{
    public function handle(): void
    {
        if (!$_SESSION['user'] ?? false) {
            header('Location: /');

            exit;
        }
    }
}
