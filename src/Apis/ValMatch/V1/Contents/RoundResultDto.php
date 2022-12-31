<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $roundNum
 * @property string $roundResult
 * @property string $roundCeremony
 * @property string $winningTeam
 * @property string $bombPlanter PUUID of player
 * @property string $bombDefuser PUUID of player
 * @property int $plantRoundTime
 * @property PlayerLocationsDto[] $plantPlayerLocations
 * @property LocationDto $plantLocation
 * @property string $plantSite
 * @property int $defuseRoundTime
 * @property PlayerLocationsDto[] $defusePlayerLocations
 * @property LocationDto $defuseLocation
 * @property PlayerRoundStatsDto[] $playerStats
 * @property string $roundResultCode
 */
class RoundResultDto extends BaseContent
{
    final protected function __construct(
        public readonly int $roundNum,
        public readonly string $roundResult,
        public readonly string $roundCeremony,
        public readonly string $winningTeam,
        public readonly string $bombPlanter,
        public readonly string $bombDefuser,
        public readonly int $plantRoundTime,
        public readonly array $plantPlayerLocations,
        public readonly LocationDto $plantLocation,
        public readonly string $plantSite,
        public readonly int $defuseRoundTime,
        public readonly array $defusePlayerLocations,
        public readonly LocationDto $defuseLocation,
        public readonly array $playerStats,
        public readonly string $roundResultCode,
    ) {
    }
}
