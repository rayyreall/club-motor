<?php

namespace clubMotor\Controller;

use clubMotor\App\View;

class ArticleController
{
    public function index(): void
    {
        $query = $_GET['q'] ?? null;

        if ($query) {
            View::render("Article/index", null);
        } else{
            echo "Article Not found";
        }
    }
}