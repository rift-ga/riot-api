<?php

namespace Rift\RiotApi\Apis\TftLeague\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property bool $freshBlood
 * @property int $wins First placement.
 * @property string $summonerName
 * @property MiniSeriesDTO $miniSeries
 * @property bool $inactive
 * @property bool $veteran
 * @property bool $hotStreak
 * @property string $rank
 * @property int $leaguePoints
 * @property int $losses Second through eighth placement.
 * @property string $summonerId Player's encrypted summonerId.
 */
class LeagueItemDto extends BaseContent
{
    final protected function __construct(
        public readonly bool $freshBlood,
        public readonly int $wins,
        public readonly string $summonerName,
        public readonly MiniSeriesDTO $miniSeries,
        public readonly bool $inactive,
        public readonly bool $veteran,
        public readonly bool $hotStreak,
        public readonly string $rank,
        public readonly int $leaguePoints,
        public readonly int $losses,
        public readonly string $summonerId,
    ) {
    }
}
