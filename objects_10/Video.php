<?php

class Video
{
    private string $title;
    private bool $checkedOut;
    private array $userRatings;

    public function __construct(string $title, array $userRatings, bool $checkedOut)
    {
        $this->title = $title;
        $this->checkedOut = $checkedOut;
        $this->userRatings = $userRatings;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isCheckedOut(): bool
    {
        return $this->checkedOut;
    }

    public function checkOutVideo(): void
    {
        $this->checkedOut = true;
    }

    public function returnVideo(): void
    {
        $this->checkedOut = false;
    }

    public function receiveRating($rating): void
    {
        $this->userRatings[] = $rating;
    }

    public function averageUserRating(): int
    {
        $ratings = 0;
        foreach($this->userRatings as $rating)
        {
            $ratings += $rating;
        }
        return $ratings / count($this->userRatings);
    }
}