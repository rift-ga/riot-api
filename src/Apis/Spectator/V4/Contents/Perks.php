<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int[] $perkIds      IDs of the perks/runes assigned.
 * @property int   $perkStyle    Primary runes path
 * @property int   $perkSubStyle Secondary runes path
 */
class Perks extends BaseContent
{
    final protected function __construct(
        public readonly array $perkIds,
        public readonly int $perkStyle,
        public readonly int $perkSubStyle,
    ) {
    }
}
