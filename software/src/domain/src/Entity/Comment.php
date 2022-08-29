<?php

namespace PhpCleanArchitecture\Domain\Entity;

use DateTimeImmutable;

/**
 * Comment Entity
 */
class Comment
{
    protected int $id;
    protected string $author;
    protected string $text;
    protected string $email;
    protected DateTimeImmutable $createdAt;
    protected Conference $conference;

    public function __construct(string $theAuthor, string $theText, string $theAuthorsEmail, DateTimeImmutable $createdDate = new DateTimeImmutable(), ?Conference $theConference = null)
    {
        $this->author = $theAuthor;
        $this->email = $theAuthorsEmail;
        $this->text = $theText;
        $this->createdAt = $createdDate;
        $this->conference = $theConference;
    }

    public function getAuthor() : string{
        return $this->author;
    }

    public function setAuthor(string $value) : self
    {
        $this->author = $value;

        return $this;
    }

    public function getEmail() : string{
        return $this->email;
    }

    public function setEmail(string $value) : self
    {
        $this->email = $value;

        return $this;
    }
    
    public function getText() : string{
        return $this->text;
    }

    public function setText(string $value) : self
    {
        $this->text = $value;

        return $this;
    }

    public function getCreatedAt() : DateTimeImmutable{
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $value) : self
    {
        $this->createdAt = $value;

        return $this;
    }
    
    public function getConference() : Conference{
        return $this->conference;
    }

    public function setConference(string $value) : self
    {
        $this->conference = $value;

        return $this;
    }
}
