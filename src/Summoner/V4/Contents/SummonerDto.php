<?php

namespace Rift\RiotApi\Summoner\V4\Contents;

use Rift\RiotApi\ContentInterface;

/**
 * Represents a summoner.
 */
class SummonerDto implements ContentInterface
{
    public function __construct(
        private readonly string $accountId,
        private readonly int $profileIconId,
        private readonly string $revisionDate,
        private readonly string $name,
        private readonly string $id,
        private readonly string $puuid,
        private readonly int $summonerLevel,
    ) {
    }

    public function getAccountId(): string
    {
        return $this->accountId;
    }

    public function getProfileIconId(): int
    {
        return $this->profileIconId;
    }

    public function getRevisionDate(): string
    {
        return $this->revisionDate;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getSummonerLevel(): string
    {
        return $this->summonerLevel;
    }
}
