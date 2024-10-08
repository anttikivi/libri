<?php

namespace App\Middleware;

class Guest
{
    public function handle(): void
    {
        if ($_SESSION['user'] ?? false) {
            header('Location: /');

            exit;
        }
    }
}
