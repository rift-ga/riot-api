<?php

namespace Rift\RiotApi\Apis\League\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $summonerId Player's encrypted summonerId.
 * @property string $rank The player's division within a tier.
 * @property int $wins Winning team on Summoners Rift.
 * @property int $losses Losing team on Summoners Rift.
 */
class LeagueEntryDto extends BaseContent
{
    final protected function __construct(
        public readonly string $leagueId,
        public readonly string $summonerId,
        public readonly string $summonerName,
        public readonly string $queueType,
        public readonly string $tier,
        public readonly string $rank,
        public readonly int $leaguePoints,
        public readonly int $wins,
        public readonly int $losses,
        public readonly bool $hotStreak,
        public readonly bool $veteran,
        public readonly bool $freshBlood,
        public readonly bool $inactive,
        public readonly ?MiniSeriesDto $miniSeries = null,
    ) {}
}
