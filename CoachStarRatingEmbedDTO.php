<?php

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
    function __get($name)
    {
        if ($name == "imagePath") {
            return $this->imageFolderPath . "/" . $this->coachUid;
        }
    }
}

$DTO = new CoachStarRatingEmbedDTO();
$DTO->imageFolderPath = "dfgdfg";
$DTO->coachUid = "sdf";
echo $DTO->imagePath;
