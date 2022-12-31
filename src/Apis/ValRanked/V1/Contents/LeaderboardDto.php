<?php

namespace Rift\RiotApi\Apis\ValRanked\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $shard The shard for the given leaderboard.
 * @property string $actId The act id for the given leaderboard. Act ids can be found using the val-content API.
 * @property int $totalPlayers The total number of players in the leaderboard.
 * @property PlayerDto[] $players
 */
class LeaderboardDto extends BaseContent
{
    final protected function __construct(
        public readonly string $shard,
        public readonly string $actId,
        public readonly int $totalPlayers,
        public readonly array $players,
    ) {
    }
}
