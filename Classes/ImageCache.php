<?php

class ImageCache {
    function isCached(CoachStarRatingEmbedDTO $inputData){
        $imageFullPath = $inputData->imageFolderPath . "/" . $inputData->coachUid;
        if (file_exists($imageFullPath)) {
            $currentTime = time();
            $creationTime = filectime($imageFullPath);
            $cacheLenght = 86400; #7 days
            return ($currentTime-$creationTime!=$cacheLenght);
        } else {return false;}
    }
}