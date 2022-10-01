<?php

namespace Rift\RiotApi\Apis\Champion\V3\Contents;

use Rift\RiotApi\Interfaces\ContentInterface;

/**
 * Contains information about champion.
 */
class ChampionInfo implements ContentInterface
{
    public function __construct(
        private readonly int $maxNewPlayerLevel,
        private readonly array $freeChampionIdsForNewPlayers,
        private readonly array $freeChampionIds,
    ) {
    }

    public function getMaxNewPlayerLevel(): int
    {
        return $this->maxNewPlayerLevel;
    }

    /**
     * @return int[]
     */
    public function getFreeChampionIdsForNewPlayers(): array
    {
        return $this->freeChampionIdsForNewPlayers;
    }

    /**
     * @return int[]
     */
    public function getFreeChampionIds(): array
    {
        return $this->freeChampionIds;
    }

}
