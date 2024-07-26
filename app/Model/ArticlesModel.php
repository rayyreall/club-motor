<?php

namespace clubMotor\Model;

use clubMotor\App\Database;
use clubMotor\Domain\Article;
use clubMotor\Domain\ArticleDetail;

class ArticlesModel
{
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance()->getConnection();
    }
    public function findById(int $id): array
    {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $article = $result->fetch_assoc();
        $stmt->close();
        return $article;
    }
    public function findAll(): array
    {
        $result = $this->db->query("SELECT * FROM articles");
        $articles = array();
        while ($row = $result->fetch_assoc()) {
            $article = new Article();
            $article->setId($row['id']);
            $article->setTitle($row['title']);
            $article->setContent($row['content']);
            $article->setPublicationDate($row['publication_date']);
            $article->setPhotoUrl($row['photo_url']);
            $articles[] = $article;
        }
        return $articles;
    }
    public function findByCode(string $code): array | null
    {
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE code = ?");
        $stmt->bind_param("s", $code);
        $stmt->execute();
        $result = $stmt->get_result();
        $article = $result->fetch_assoc();
        $stmt->close();
        return $article;
    }
    public function findAllArticleDetailById(int $id) {
        $stmt = $this->db->prepare("SELECT * FROM article_detail WHERE article_id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $articleDetails = array();
        while ($row = $result->fetch_assoc()) {
            $articleDetail = new ArticleDetail();
            $articleDetail->setId($row['id']);
            $articleDetail->setArticleId($row['article_id']);
            $articleDetail->setName($row['name']);
            $articleDetail->setDescription($row['description']);
            $articleDetail->setCoverUrl($row['cover_url']);
            $articleDetails[] = $articleDetail;
        }
        $stmt->close();
        return $articleDetails;
    }
}