<?php


use PHPUnit\Framework\TestCase;

class TestArticlesModel extends TestCase
{
    public function testFindByCode()
    {
        $articlesModel = new \clubMotor\Model\ArticlesModel();
        $article = $articlesModel->findByCode('tour');
        var_dump($article);
        $this->assertIsArray($article);
    }
    public function testFindAll()
    {
        $articlesModel = new \clubMotor\Model\ArticlesModel();
        $articles = $articlesModel->findAll();
        var_dump($articles);
        $this->assertIsArray($articles);
    }
    public function testFindArticleDetailById()
    {
        $articlesModel = new \clubMotor\Model\ArticlesModel();
        $articleDetail = $articlesModel->findAllArticleDetailById(1);
        var_dump($articleDetail);
        $this->assertIsArray($articleDetail);
    }
}
