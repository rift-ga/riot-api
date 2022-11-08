<?php

namespace Rift\RiotApi\Apis\LeagueExp\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

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
    ) {
    }
}
