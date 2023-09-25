<?php

namespace Rift\RiotApi\Apis\TftLeague\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string        $leagueId     Not included for the RANKED_TFT_TURBO queueType.
 * @property string        $summonerId   Player's encrypted summonerId.
 * @property string        $summonerName
 * @property string        $queueType
 * @property string        $ratedTier    Only included for the RANKED_TFT_TURBO queueType. (Legal values: ORANGE, PURPLE, BLUE, GREEN, GRAY)
 * @property int           $ratedRating  Only included for the RANKED_TFT_TURBO queueType.
 * @property string        $tier         Not included for the RANKED_TFT_TURBO queueType.
 * @property string        $rank         A player's division within a tier. Not included for the RANKED_TFT_TURBO queueType.
 * @property int           $leaguePoints Not included for the RANKED_TFT_TURBO queueType.
 * @property int           $wins         First placement.
 * @property int           $losses       Second through eighth placement.
 * @property bool          $hotStreak    Not included for the RANKED_TFT_TURBO queueType.
 * @property bool          $veteran      Not included for the RANKED_TFT_TURBO queueType.
 * @property bool          $freshBlood   Not included for the RANKED_TFT_TURBO queueType.
 * @property bool          $inactive     Not included for the RANKED_TFT_TURBO queueType.
 * @property MiniSeriesDTO $miniSeries   Not included for the RANKED_TFT_TURBO queueType.
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
        public readonly ?MiniSeriesDTO $miniSeries = null, // Mini Series do not exist on TFT
        public readonly ?string $ratedTier = "",
        public readonly ?int $ratedRating = 0,
    ) {
    }
}
