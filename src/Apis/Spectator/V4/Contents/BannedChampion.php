<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $pickTurn   The turn during which the champion was banned
 * @property int $championId The ID of the banned champion
 * @property int $teamId     The ID of the team that banned the champion
 */
class BannedChampion extends BaseContent
{
    final protected function __construct(
        public readonly int $pickTurn,
        public readonly int $championId,
        public readonly int $teamId,
    ) {
    }
}
