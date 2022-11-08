<?php

namespace Rift\RiotApi\Apis\Champion\V3\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * Contains information about champion.
 *
 * @property int[] $freeChampionIdsForNewPlayers
 * @property int[] $freeChampionIds
 */
class ChampionInfo extends BaseContent
{
    public function __construct(
        public readonly int $maxNewPlayerLevel,
        public readonly array $freeChampionIdsForNewPlayers,
        public readonly array $freeChampionIds,
    ) {
    }
}
