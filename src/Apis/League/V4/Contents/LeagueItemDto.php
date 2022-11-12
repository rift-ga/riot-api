<?php

namespace Rift\RiotApi\Apis\League\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $wins Winning team on Summoners Rift.
 * @property int $losses Losing team on Summoners Rift.
 * @property int $summonerId Player's encrypted summonerId.
 */
class LeagueItemDto extends BaseContent
{
    final protected function __construct(
        public readonly bool $freshBlood,
        public readonly int $wins,
        public readonly string $summonerName,
        public readonly ?MiniSeriesDto $miniSeries,
        public readonly bool $inactive,
        public readonly bool $veteran,
        public readonly bool $hotStreak,
        public readonly string $rank,
        public readonly int $leaguePoints,
        public readonly int $losses,
        public readonly string $summonerId,
    ) {}
}
