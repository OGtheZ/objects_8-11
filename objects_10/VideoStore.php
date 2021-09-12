<?php

class VideoStore
{
    private array $videos;

    public function __construct(array $videos)
    {
        foreach($videos as $video)
        {
            $this->add($video);
        }
    }

    public function getVideos(): array
    {
        return $this->videos;
    }

    public function add(Video $video): void
    {
        $this->videos[$video->getTitle()] = $video;
    }

    public function listVideos($videos)
    {
        foreach ($videos as $video) {
            if ($video->isCheckedOut() === false) {
                echo $video->getTitle() . " ,with a rating of : " . $video->averageUserRating();
                echo " and is available." . PHP_EOL;
            } else {
                echo $video->getTitle() . ",with a rating of : " . $video->averageUserRating();
                echo " , this movie is rented out!" . PHP_EOL;
            }
        }
    }

    public function displayOptions()
    {
        echo "Option 1: return movie. " . PHP_EOL;
        echo "Option 2: rent movie. " . PHP_EOL;
        echo "Option 3: rate movie." . PHP_EOL;
        echo "Option 4: list movies." . PHP_EOL;
        echo "Option 5: exit." . PHP_EOL;
    }
}
