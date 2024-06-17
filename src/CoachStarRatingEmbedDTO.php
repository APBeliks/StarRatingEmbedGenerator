<?php

declare(strict_types=1);

namespace ReciproCoachEmbed;

/**
 * @property string $imagePath
 */
class CoachStarRatingEmbedDTO
{
    public string $imageFolderPath;
    public string $firstName;
    public string $lastName;
    public string $coachUid;
    public string $coachUrl = "https://reciprocoach.com/";
    public int $starRating;
    public int $imgCacheLenght;
    function __get($name)
    {
        if ($name == "imagePath") {
            return $this->imageFolderPath . "/" . $this->coachUid;
        }
    }
}
