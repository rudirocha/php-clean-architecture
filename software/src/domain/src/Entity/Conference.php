<?php

namespace PhpCleanArchitecture\Domain\Entity;

/**
 * PHP version: 8.1
 *
 */
class Conference
{
    private string $city;
    private int $month;
    private int $year;
    private bool $international;
    private string $slug;

    public function __construct(string $city, int $month, int $year, string $slug, bool $isInternational = false)
    {
        $this->city = $city;
        $this->month = $month;
        $this->year = $year;
        $this->slug = $slug;
        $this->international = $isInternational;
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

    public function setCity(string $value): Conference
    {
        $this->city = $value;

        return $this;
    }

    /**
     * Get Conference's Month
     *
     * @return integer
     */
    public function getMonth(): int
    {
        return $this->month;
    }

    public function setMonth(int $value): Conference
    {
        if ($value < 1 || $value > 12) {
            throw new \InvalidArgumentException("Invalid month [$value]");
        }

        $this->month = $value;

        return $this;
    }

    /**
     * Get Conference's year
     *
     * @return integer
     */
    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $value): Conference
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

    public function setSlug(string $value): Conference
    {
        $this->slug = $value;

        return $this;
    }

    /**
     * This is international or a local conference
     *
     * @return boolean
     */
    public function isInternational(): bool
    {
        return $this->international;
    }

    public function setInternational(bool $value): Conference
    {
        $this->international = $value;

        return $this;
    }
}
