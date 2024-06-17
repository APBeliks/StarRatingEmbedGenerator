<?php

declare(strict_types=1);

namespace ReciproCoachEmbed;

function isCached(string $imageFullPath, int $cacheLenght): bool
{
    $creationTime = @filectime($imageFullPath);
    if ($creationTime == false) {
        return false;
    }
    return time() - $creationTime > $cacheLenght;
}
