<?php

namespace clubMotor\Controller;

use clubMotor\App\View;
use clubMotor\Domain\Article;
use clubMotor\Model\ArticlesModel;

class ArticleController
{
    public function index(): void
    {
        $query = $_GET['q'] ?? null;
        $articlesModel = new ArticlesModel();

        if ($query && $article = $articlesModel->findByCode($query)){
            $data = [
                'article' => $article,
                'articleDetail' => $articlesModel->findAllArticleDetailById($article['id'])
            ];
            View::render("Article/index", $data);
        } else{
            echo "Article Not found";
        }
    }
}