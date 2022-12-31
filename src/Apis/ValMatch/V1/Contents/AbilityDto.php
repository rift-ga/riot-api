<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $grenadeEffects
 * @property string $ability1Effects
 * @property string $ability2Effects
 * @property string $ultimateEffects
 */
class AbilityDto extends BaseContent
{
    final protected function __construct(
        public readonly string $grenadeEffects,
        public readonly string $ability1Effects,
        public readonly string $ability2Effects,
        public readonly string $ultimateEffects,
    ) {
    }
}
