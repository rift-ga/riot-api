<?php

namespace Rift\RiotApi\ChampionMastery\V4\Contents;

use Rift\RiotApi\ContentInterface;

/**
 * Contains single Champion Mastery information for player and champion combination.
 */
class ChampionMasteryDTO implements ContentInterface
{
    public function __construct(
        private int $championPointsUntilNextLevel,
        private bool $chestGranted,
        private int $championId,
        private int $lastPlayTime,
        private int $championLevel,
        private string $summonerId,
        private int $championPoints,
        private int $championPointsSinceLastLevel,
        private int $tokensEarned,
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
