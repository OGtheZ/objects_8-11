<?php

require_once "Video.php";
require_once "VideoStore.php";

$videoStore = new VideoStore([
    new Video("Who am I?", [10, 10, 9, 9], false),
    new Video("Lord of the Rings: Fellowship of the Ring", [10, 10, 10, 10], false),
    new Video("Lord of the Rings: The Two Towers", [10, 10, 10, 10, 9, 8],  false)
]);

$videoStore->add(new Video("The Matrix", [8, 8, 8, 10], false));
$videoStore->add(new Video("Godfather II", [9, 6, 8, 10], false));
$videoStore->add(new Video("Star Wars Episode IV: A New Hope", [2, 1, 4, 10], false));

$videoStore->displayOptions();

$choosing = true;
while($choosing === true) {
    $choice = (int)readline("Enter your choice: ");
    if ($choice < 1 || !is_numeric($choice)) {
        echo "Invalid choice!" . PHP_EOL;
        continue;
    } elseif ($choice === 1) {
        $title = readline ("Enter movie title: ");
        if (!in_array($title, array_keys($videoStore->getVideos())))
        {
            echo "This movie is not found! " . PHP_EOL;
            continue;
        } else {
            $videoStore->getVideos()[$title]->returnVideo();
        }

        $continue = readline ("Would you like to continue? y/n ");
        if ($continue === "n")
        {
            $choosing = false;
        } else {
            $videoStore->displayOptions();
            continue;
        }
    } elseif ($choice === 2) {
        $title = readline("Enter movie title: ");
        if (!in_array($title, array_keys($videoStore->getVideos())))
        {
            echo "This movie is not found! " . PHP_EOL;
            continue;
        } else {
            $videoStore->getVideos()[$title]->checkOutVideo();
        }

        $continue = readline ("Would you like to continue? y/n ");
        if ($continue === "n")
        {
            $choosing = false;
        } else {
            $videoStore->displayOptions();
            continue;
        }
    } elseif ($choice === 3) {
        $title = readline ("Enter movie title: ");
        if (!in_array($title, array_keys($videoStore->getVideos())))
        {
            echo "This movie is not found! " . PHP_EOL;
            continue;
        } else {
            $rating = (int) readline("Provide your rating(1-10): ");
            $videoStore->getVideos()[$title]->receiveRating($rating);
            $continue = readline ("Would you like to continue? y/n ");
            if ($continue === "n")
            {
                $choosing = false;
            } else {
                $videoStore->displayOptions();
                continue;
            }
        }
    } elseif ($choice === 4) {
        $videoStore->listVideos($videoStore->getVideos());
        $continue = readline ("Would you like to continue? y/n ");
        if ($continue === "n")
        {
            $choosing = false;
        } else {
            $videoStore->displayOptions();
            continue;
        }
    } elseif ($choice === 5){
        exit;}
}
