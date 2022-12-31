<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int             $score
 * @property int             $roundsPlayed
 * @property int             $kills
 * @property int             $deaths
 * @property int             $assists
 * @property int             $playtimeMillis
 * @property AbilityCastsDto $abilityCasts
 */
class PlayerStatsDto extends BaseContent
{
    final protected function __construct(
        public readonly int $score,
        public readonly int $roundsPlayed,
        public readonly int $kills,
        public readonly int $deaths,
        public readonly int $assists,
        public readonly int $playtimeMillis,
        public readonly AbilityCastsDto $abilityCasts,
    ) {
    }
}
