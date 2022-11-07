<?php

namespace Rift\RiotApi\Apis\LeagueExp\V4\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

class LeagueEntryDto implements ContentInterface
{
    public function __construct(
        private readonly string $leagueId,
        private readonly string $summonerId,
        private readonly string $summonerName,
        private readonly string $queueType,
        private readonly string $tier,
        private readonly string $rank,
        private readonly int $leaguePoints,
        private readonly int $wins,
        private readonly int $losses,
        private readonly bool $hotStreak,
        private readonly bool $veteran,
        private readonly bool $freshBlood,
        private readonly bool $inactive,
        private readonly MiniSeriesDto $miniSeries,
    ) {
    }

    public function getLeagueId(): string
    {
        return $this->leagueId;
    }

    public function getSummonerId(): string
    {
        return $this->summonerId;
    }

    public function getSummonerName(): string
    {
        return $this->summonerName;
    }

    public function getQueueType(): string
    {
        return $this->queueType;
    }

    public function getTier(): string
    {
        return $this->tier;
    }

    public function getRank(): string
    {
        return $this->rank;
    }

    public function getLeaguePoints(): int
    {
        return $this->leaguePoints;
    }

    public function getWins(): int
    {
        return $this->wins;
    }

    public function getLosses(): int
    {
        return $this->losses;
    }

    public function getHotStreak(): bool
    {
        return $this->hotStreak;
    }

    public function getVeteran(): bool
    {
        return $this->veteran;
    }

    public function getFreshBlood(): bool
    {
        return $this->freshBlood;
    }

    public function getInactive(): bool
    {
        return $this->inactive;
    }

    public function getMiniSeries(): MiniSeriesDto
    {
        return $this->miniSeries;
    }
}
