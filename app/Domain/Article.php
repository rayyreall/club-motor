<?php

namespace clubMotor\Domain;

class Article
{
    public int $id;
    public string $code;

    public string $title;
    public string $content;
    public string $publication_date;
    public string|null $photo_url;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getPublicationDate(): string
    {
        return $this->publication_date;
    }

    public function setPublicationDate(string $publication_date): void
    {
        $this->publication_date = $publication_date;
    }

    public function getPhotoUrl(): ?string
    {
        return $this->photo_url;
    }

    public function setPhotoUrl(?string $photo_url): void
    {
        $this->photo_url = $photo_url;
    }
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'content' => $this->content,
            'publication_date' => $this->publication_date,
            'photo_url' => $this->photo_url
        ];
    }
}