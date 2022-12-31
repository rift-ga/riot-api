<?php

namespace Rift\RiotApi\Apis\ValRanked\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $puuid           This field may be omitted if the player has been anonymized.
 * @property string $gameName        This field may be omitted if the player has been anonymized.
 * @property string $tagLine         This field may be omitted if the player has been anonymized.
 * @property int    $leaderboardRank
 * @property int    $rankedRating
 * @property int    $numberOfWins
 */
class PlayerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly string $gameName,
        public readonly string $tagLine,
        public readonly int $leaderboardRank,
        public readonly int $rankedRating,
        public readonly int $numberOfWins,
    ) {
    }
}
