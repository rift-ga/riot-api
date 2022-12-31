<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int                  $timeSinceGameStartMillis
 * @property int                  $timeSinceRoundStartMillis
 * @property string               $killer                    PUUID
 * @property string               $victim                    PUUID
 * @property LocationDto          $victimLocation
 * @property string[]             $assistants                List of PUUIDs
 * @property PlayerLocationsDto[] $playerLocations
 * @property FinishingDamageDto   $finishingDamage
 */
class KillDto extends BaseContent
{
    final protected function __construct(
        public readonly int $timeSinceGameStartMillis,
        public readonly int $timeSinceRoundStartMillis,
        public readonly string $killer,
        public readonly string $victim,
        public readonly LocationDto $victimLocation,
        public readonly array $assistants,
        public readonly array $playerLocations,
        public readonly FinishingDamageDto $finishingDamage,
    ) {
    }
}
