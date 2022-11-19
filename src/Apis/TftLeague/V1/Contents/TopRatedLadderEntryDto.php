<?php

namespace Rift\RiotApi\Apis\TftLeague\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $summonerId
 * @property string $summonerName
 * @property string $ratedTier                    (Legal values: ORANGE, PURPLE, BLUE, GREEN, GRAY)
 * @property int    $ratedRating
 * @property int    $wins                         First placement.
 * @property int    $previousUpdateLadderPosition
 */
class TopRatedLadderEntryDto extends BaseContent
{
    final protected function __construct(
        public readonly string $summonerId,
        public readonly string $summonerName,
        public readonly string $ratedTier,
        public readonly int $ratedRating,
        public readonly int $wins,
        public readonly int $previousUpdateLadderPosition,
    ) {
    }
}
