<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string      $puuid
 * @property KillDto[]   $kills
 * @property DamageDto[] $damage
 * @property int         $score
 * @property EconomyDto  $economy
 * @property AbilityDto  $ability
 */
class PlayerRoundStatsDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly array $kills,
        public readonly array $damage,
        public readonly int $score,
        public readonly EconomyDto $economy,
        public readonly AbilityDto $ability,
    ) {
    }
}
