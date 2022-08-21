<?php
namespace PhpCleanArchitecture\Domain\Entity;

/**
 * PHP version: 8.1
 *
 */
class Conference
{
    private string $title;
    private int $month;
    private int $year;
    private string $slug;

    public function __construct(string $title, int $month, int $year, string $slug)
    {
        $this->title = $title;
        $this->month = $month;
        $this->year = $year;
        $this->slug = $slug;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $value): Conference
    {
        $this->title = $value;

        return $this;
    }

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

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $value): Conference
    {
        if ($value < 1960) {
            throw new \InvalidArgumentException("Invalid year [$value]. Value must be greater than 1959.");
        }
        
        $this->month = $value;

        return $this;
    }

    public function getSlug() : string
    {
        return $this->slug;
    }

    public function setSlug(string $value) : Conference
    {
        $this->slug = $value;

        return $this;
    }
}
