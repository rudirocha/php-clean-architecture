<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;
use PhpCleanArchitecture\Domain\Entity\Comment as CommentEntity;
use PhpCleanArchitecture\Domain\Entity\Conference as ConferenceEntity;


#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment extends CommentEntity
{
    #[ORM\Column(type: 'integer')]
    #[ORM\Id, ORM\GeneratedValue()]
    protected int $id;

    #[ORM\Column(length: 255)]
    protected string $author;

    #[ORM\Column(type: 'text')]
    protected string $text;

    #[ORM\Column(length: 255)]
    protected string $email;
    
    #[ORM\Column(type: 'datetime_immutable')]
    protected \DateTimeImmutable $createdAt;

    #[ORM\ManyToOne(targetEntity: Conference::class, inversedBy: 'comments')]
    #[ORM\JoinColumn(nullable: false)]
    protected ConferenceEntity $conference;
}
