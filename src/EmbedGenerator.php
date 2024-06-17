<?php

declare(strict_types=1);

namespace ReciproCoachEmbed;

require '../vendor/autoload.php';

use ReciproCoachEmbed\CoachStarRatingEmbedDTO;
use ReciproCoachEmbed\ImageGenerator;

require_once "helpers.php";

class EmbedGenerator
{
    public function generateEmbed(CoachStarRatingEmbedDTO $inputData): string
    {
        if (isCached($inputData->imagePath, $inputData->imageCacheLenght) == false) {
            $imageGenerator = new ImageGenerator();
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
