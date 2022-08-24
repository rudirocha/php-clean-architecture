<?php

namespace PhpCleanArchitecture\Domain\Entity;

use DateTimeImmutable;

/**
 * Comment Entity
 */
class Comment
{
    private string $author;
    private string $text;
    private string $email;
    private DateTimeImmutable $createdAt;
    private Conference $conference;

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

    public function setAuthor(string $value) : Comment
    {
        $this->author = $value;

        return $this;
    }

    public function getEmail() : string{
        return $this->email;
    }

    public function setEmail(string $value) : Comment
    {
        $this->email = $value;

        return $this;
    }
    
    public function getText() : string{
        return $this->text;
    }

    public function setText(string $value) : Comment
    {
        $this->text = $value;

        return $this;
    }

    public function getCreatedAt() : DateTimeImmutable{
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeImmutable $value) : Comment
    {
        $this->createdAt = $value;

        return $this;
    }
    
    public function getConference() : Conference{
        return $this->conference;
    }

    public function setConference(string $value) : Comment
    {
        $this->conference = $value;

        return $this;
    }
}
