<?php

namespace ReciproCoachEmbed;

class ImageGenerator
{
    public $image;
    public function generateImage(CoachStarRatingEmbedDTO $inputData)
    {
        $this->image = imagecreatetruecolor(350, 100);
        $fontSize = 25; #its necesssery to determin y axis of stars and text
        $this->insertStars($inputData->starRating, $fontSize);
        $this->insertCoachFullName($inputData->firstName, $inputData->lastName, $fontSize);
        $imageFullPath = $inputData->imageFolderPath . "/" . $inputData->coachUid;
        imagepng($this->image, $imageFullPath);
        imagedestroy($this->image);
    }

    private function insertStars($starRating, $fontSize)
    {
        $maxRating = 5;
        $solidStar = imagecreatefrompng('stars/star-solid.png');
        $emptyStar = imagecreatefrompng('stars/star-regular.png');
        $starWidth = imagesx($solidStar); #assuming both solid and empty stars got same width(they should)

        $x = 0;
        $y = $fontSize + 5;
        for ($i = 0; $i < $starRating; $i++) {
            imagecopy($this->image, $solidStar, $x, $y, 0, 0, 60, 60);
            $x += $starWidth;
        }
        for ($i = 0; $i < $maxRating - $starRating; $i++) {
            imagecopy($this->image, $emptyStar, $x, $y, 0, 0, 60, 60);
            $x += $starWidth;
        }
        imagedestroy($emptyStar);
        imagedestroy($solidStar);
    }

    private function insertCoachFullName($firstName, $lastName, $fontSize)
    {
        $fontPath = 'fonts/Roboto-Regular.ttf';
        $fullName = $firstName . " " . $lastName;
        $white = imagecolorallocate($this->image, 255, 255, 255); #Color of font
        imagettftext($this->image, $fontSize, 0, 0, $fontSize, $white, $fontPath, $fullName);
    }
}
