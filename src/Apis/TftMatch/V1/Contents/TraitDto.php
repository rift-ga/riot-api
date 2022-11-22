<?php

namespace Rift\RiotApi\Apis\TftMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $name         Trait name.
 * @property int    $num_units    Number of units with this trait.
 * @property int    $style        Current style for this trait. (0 = No style, 1 = Bronze, 2 = Silver, 3 = Gold, 4 = Chromatic)
 * @property int    $tier_current Current active tier for the trait.
 * @property int    $tier_total   Total tiers for the trait.
 */
class TraitDto extends BaseContent
{
    final protected function __construct(
        public readonly string $name,
        public readonly int $num_units,
        public readonly int $style,
        public readonly int $tier_current,
        public readonly int $tier_total,
    ) {
    }
}
