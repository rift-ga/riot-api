<?php

namespace Rift\RiotApi\Apis\Account\V1\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

/**
 * Represents a summoner.
 */
class ActiveShardDto implements ContentInterface
{
    public function __construct(
        private readonly string $puuid,
        private readonly string $game,
        private readonly string $activeShard
    ) {
    }

    public function getPuuid(): string
    {
        return $this->puuid;
    }

    public function getGame(): string
    {
        return $this->game;
    }

    public function getActiveShard(): string
    {
        return $this->activeShard;
    }
}
