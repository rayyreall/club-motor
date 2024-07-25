<?php

namespace clubMotor\Controller;

use clubMotor\App\View;

class ArticleController
{
    public function index(): void
    {
        View::render("Article/index", null);
    }
}