<?php

namespace PhpCleanArchitecture\Domain\Entity;

use PhpCleanArchitecture\Domain\Entity\Conference as EntityConference;

/**
 * PHP version: 8.1
 *
 */
class Conference
{
    protected int $id;
    protected string $city;
    protected string $year;
    protected bool $isInternational;
    protected string $slug;

    protected $comments;

    public function __toString(): string
    {
        return sprintf("%s %s", $this->getCity(), $this->getYear());
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $value): self
    {
        $this->id = $value;

        return $this;
    }

    /**
     * Get Conference's City
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $value): self
    {
        $this->city = $value;

        return $this;
    }

    /**
     * Get Conference's year
     *
     * @return integer
     */
    public function getYear(): string
    {
        return $this->year;
    }

    public function setYear(string $value): self
    {
        if ($value > 9999) {
            throw new \InvalidArgumentException("Invalid year [$value]. Value must be less than 9999.");
        }

        $this->year = $value;

        return $this;
    }

    /**
     * Conference Slug
     *
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    public function setSlug(string $value): self
    {
        $this->slug = $value;

        return $this;
    }

    /**
     * This is international or a local conference
     *
     * @return boolean
     */
    public function getIsInternational(): bool
    {
        return $this->isInternational;
    }

    public function setIsInternational(bool $value): self
    {
        $this->isInternational = $value;

        return $this;
    }
}
