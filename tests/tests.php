<?php

declare(strict_types=1);

namespace ReciproCoachEmbed;

require '../vendor/autoload.php';
require '../src/EmbedGenerator.php';


$CoachStarRatingEmbedDTO = new CoachStarRatingEmbedDTO();
$CoachStarRatingEmbedDTO->imageFolderPath = "test-image-dir/";
$CoachStarRatingEmbedDTO->firstName = "Tester";
$CoachStarRatingEmbedDTO->lastName = "Testerski";
$CoachStarRatingEmbedDTO->coachUid = "01t92e83s74t";
$CoachStarRatingEmbedDTO->coachUrl;
$CoachStarRatingEmbedDTO->starRating = 4;
$StarRatingEmbedGenerator = new EmbedGenerator();

echo $StarRatingEmbedGenerator->generateEmbed($CoachStarRatingEmbedDTO);
