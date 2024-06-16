<?php

namespace ReciproCoachEmbed;

use CoachStarRatingEmbedDTO;
use ImageGenerator;

require_once "helpers.php";

class StarRatingEmbedGenerator
{
    public function generateEmbed(CoachStarRatingEmbedDTO $inputData)
    {
        if (isCached($inputData->imagePath) == false) {
            $imageGenerator = new StarRatingImageGenerator();
            $imageGenerator->generateImage($inputData);
        }
        return $this->generateHtml($inputData->imagePath, $inputData->coachUrl);
    }

    private function generateHtml(string $imageFullPath, string $coachUrl): string
    {
        return "
                <div class=\"reciprocoach-rating-embed\">
                    <a href=\"$coachUrl\">
                        <img src=\"$imageFullPath\" alt=\"Reciprocoach Coach Rating\" style=\"width:350px; height:100px;\">
                    </a>
                </div>
                ";
    }
}

$CoachStarRatingEmbedDTO = new CoachStarRatingEmbedDTO();
$CoachStarRatingEmbedDTO->imageFolderPath = "testy/";
$CoachStarRatingEmbedDTO->firstName = "Tester";
$CoachStarRatingEmbedDTO->lastName = "Testerski";
$CoachStarRatingEmbedDTO->coachUid = "01t92e83s74t";
$CoachStarRatingEmbedDTO->coachUrl;
$CoachStarRatingEmbedDTO->starRating = 4;
$StarRatingEmbedGenerator = new StarRatingEmbedGenerator();

echo $StarRatingEmbedGenerator->generateEmbed($CoachStarRatingEmbedDTO);
