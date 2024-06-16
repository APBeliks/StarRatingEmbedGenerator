<?php

namespace ReciproCoachEmbed;

function isCached(string $imageFullPath): bool
{
    if (file_exists($imageFullPath)) {
        $currentTime = time();
        $creationTime = filectime($imageFullPath);
        $isExpired = $currentTime - $creationTime > $cacheLenght;
        return $isExpired;
    }
    return false;
}
