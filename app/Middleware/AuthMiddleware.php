<?php

namespace clubMotor\Middleware;

use clubMotor\Helper\SessionHelper;
use clubMotor\Middleware\Middleware;

class AuthMiddleware implements Middleware
{

    function before(): void
    {
        SessionHelper::startSession();
        if (!isset($_SESSION['user'])) {
            header("Location: /auth/login");
            exit;
        }
    }
}