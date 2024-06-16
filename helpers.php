<?php

namespace ReciproCoachEmbed;

function isCached(string $imageFullPath): bool
{
    if (file_exists($imageFullPath)) {
        $currentTime = time();
        $creationTime = filectime($imageFullPath);
        $cacheLenght = 604800; #7 days
        $isExpired = $currentTime - $creationTime > $cacheLenght;
        return $isExpired;
    }
    return false;
}
