<?php

namespace clubMotor\Domain;

class ArticleDetail
{
    public int $id;
    public int $article_id;
    public string $name;
    public string|null $description;
    public string|null $cover_url;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getArticleId(): int
    {
        return $this->article_id;
    }

    public function setArticleId(int $article_id): void
    {
        $this->article_id = $article_id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getCoverUrl(): ?string
    {
        return $this->cover_url;
    }

    public function setCoverUrl(?string $cover_url): void
    {
        $this->cover_url = $cover_url;
    }
}