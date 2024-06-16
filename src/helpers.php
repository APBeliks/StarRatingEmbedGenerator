<?php

declare(strict_types=1);

namespace ReciproCoachEmbed;

function isCached(string $imageFullPath): bool
{
    $creationTime = @filectime($imageFullPath);
    if ($creationTime == false) {
        return false;
    }
    return time() - $creationTime > $cacheLenght;
}
