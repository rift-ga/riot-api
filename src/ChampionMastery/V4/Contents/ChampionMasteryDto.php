<?php

namespace Rift\RiotApi\ChampionMastery\V4\Contents;

use Rift\RiotApi\ContentInterface;

/**
 * Contains single Champion Mastery information for player and champion combination.
 */
class ChampionMasteryDto implements ContentInterface
{
    public function __construct(
        private readonly int    $championPointsUntilNextLevel,
        private readonly bool   $chestGranted,
        private readonly int    $championId,
        private readonly int    $lastPlayTime,
        private readonly int    $championLevel,
        private readonly string $summonerId,
        private readonly int    $championPoints,
        private readonly int    $championPointsSinceLastLevel,
        private readonly int    $tokensEarned,
    ) {
    }

    public function getChampionPointsUntilNextLevel(): int
    {
        return $this->championPointsUntilNextLevel;
    }

    public function isChestGranted(): bool
    {
        return $this->chestGranted;
    }

    public function getChampionId(): int
    {
        return $this->championId;
    }

    public function getLastPlayTime(): int
    {
        return $this->lastPlayTime;
    }

    public function getChampionLevel(): int
    {
        return $this->championLevel;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getChampionPoints(): int
    {
        return $this->championPoints;
    }

    public function getChampionPointsSinceLastLevel(): int
    {
        return $this->championPointsSinceLastLevel;
    }

    public function getTokensEarned(): int
    {
        return $this->tokensEarned;
    }
}
