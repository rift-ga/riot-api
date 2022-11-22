<?php

namespace Rift\RiotApi\Apis\TftMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int[]  $items        A list of the unit's items. Please refer to the Teamfight Tactics documentation for item ids.
 * @property string $character_id This field was introduced in patch 9.22 with data_version 2.
 * @property string $chosen       If a unit is chosen as part of the Fates set mechanic, the chosen trait will be indicated by this field. Otherwise this field is excluded from the response.
 * @property string $name         Unit name. This field is often left blank.
 * @property int    $rarity       Unit rarity. This doesn't equate to the unit cost.
 * @property int    $tier         Unit tier.
 */
class UnitDto extends BaseContent
{
    final protected function __construct(
        public readonly array $items,
        public readonly string $character_id,
        public readonly string $chosen,
        public readonly string $name,
        public readonly int $rarity,
        public readonly int $tier,
    ) {
    }
}
