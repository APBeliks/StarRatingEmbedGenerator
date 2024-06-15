<?php
    class StarRatingHtmlGenerator{
        function generateHtml(CoachStarRatingEmbedDTO $inputData){
            $imageFullPath = $inputData->imageFolderPath . "/" . $inputData->coachUid;
            $html = "
            <div class=\"reciprocoach-rating-embed\">
                <a href=\"https://reciprocoach.com/\">
                    <img src=\"$imageFullPath\" alt=\"Reciprocoach Coach Rating\" style=\"width:350px; height:100px;\">
                </a>
            </div>
            ";
            return $html;
        }
    }

