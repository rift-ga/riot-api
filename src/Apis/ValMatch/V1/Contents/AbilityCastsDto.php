<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $grenadeCasts
 * @property int $ability1Casts
 * @property int $ability2Casts
 * @property int $ultimateCasts
 */
class AbilityCastsDto extends BaseContent
{
    final protected function __construct(
        public readonly int $grenadeCasts,
        public readonly int $ability1Casts,
        public readonly int $ability2Casts,
        public readonly int $ultimateCasts,
    ) {
    }
}
