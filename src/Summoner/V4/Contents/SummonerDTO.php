<?php

namespace Rift\RiotApi\Summoner\V4\Contents;

use Rift\RiotApi\ContentInterface;

/**
 * Represents a summoner.
 */
class SummonerDTO implements ContentInterface
{
    public function __construct(
        private string $accountId,
        private int $profileIconId,
        private string $revisionDate,
        private string $name,
        private string $id,
        private string $puuid,
        private int $summonerLevel,
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
