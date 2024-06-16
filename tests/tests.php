<?php

$CoachStarRatingEmbedDTO = new CoachStarRatingEmbedDTO();
$CoachStarRatingEmbedDTO->imageFolderPath = "test-image-dir/";
$CoachStarRatingEmbedDTO->firstName = "Tester";
$CoachStarRatingEmbedDTO->lastName = "Testerski";
$CoachStarRatingEmbedDTO->coachUid = "01t92e83s74t";
$CoachStarRatingEmbedDTO->coachUrl;
$CoachStarRatingEmbedDTO->starRating = 4;
$StarRatingEmbedGenerator = new StarRatingEmbedGenerator();

echo $StarRatingEmbedGenerator->generateEmbed($CoachStarRatingEmbedDTO);
