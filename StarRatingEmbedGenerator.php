<?php

class StarRatingEmbedGenerator{
    public function generateEmbed(CoachStarRatingEmbedDTO $inputData){
        $imageGenerator = new StarRatingImageGenerator();
        $cache = new ImageCache();
        if (!$cache->isCached($inputData)){
            $imageGenerator->generateImage($inputData);
        }
        $htmlGenerator = new StarRatingHtmlGenerator();
        echo $htmlGenerator->generateHtml($inputData);
    }
}
require_once "DTO/CoachStarRatingEmbedDTO.php";
require_once "Classes/StarRatingImageGenerator.php";
require_once "Classes/ImageCache.php";
require_once "Classes/StarRatingHtmlGenerator.php";
$CoachStarRatingEmbedDTO = new CoachStarRatingEmbedDTO();
$CoachStarRatingEmbedDTO->imageFolderPath = "testy/";
$CoachStarRatingEmbedDTO->firstName = "Twoja";
$CoachStarRatingEmbedDTO->lastName = "Stara";
$CoachStarRatingEmbedDTO->coachUid = "abc";
$CoachStarRatingEmbedDTO->baseUrl = "test.com";
$CoachStarRatingEmbedDTO->starRating = 5;