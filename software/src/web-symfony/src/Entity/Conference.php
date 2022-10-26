<?php

namespace App\Entity;

use App\Repository\ConferenceRepository;
use Doctrine\ORM\Mapping as ORM;
use PhpCleanArchitecture\Domain\Entity\Conference as ConferenceEntity;

#[ORM\Entity(repositoryClass: ConferenceRepository::class)]
class Conference extends ConferenceEntity
{
    
    #[ORM\Column(type: 'integer')]
    #[ORM\Id, ORM\GeneratedValue()]
    protected int $id;

    #[ORM\Column(type: 'string', length: 255)]
    protected string $city;

    #[ORM\Column(type: 'string', length: 4)]
    protected string $year;

    #[ORM\Column(type: 'boolean')]
    protected bool $isInternational;

    #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: "conference", orphanRemoval: true)]
    protected $comments;
    
}
