<?php

namespace clubMotor\Controller;

use clubMotor\App\View;

class HomeController
{
    public function index(): void
    {
        View::render("Home/index", null);
    }
}