<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int    $loadoutValue
 * @property string $weapon
 * @property string $armor
 * @property int    $remaining
 * @property int    $spent
 */
class EconomyDto extends BaseContent
{
    final protected function __construct(
        public readonly int $loadoutValue,
        public readonly string $weapon,
        public readonly string $armor,
        public readonly int $remaining,
        public readonly int $spent,
    ) {
    }
}
