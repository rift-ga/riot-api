<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $damageType
 * @property string $damageItem
 * @property bool   $isSecondaryFireMode
 */
class FinishingDamageDto extends BaseContent
{
    final protected function __construct(
        public readonly string $damageType,
        public readonly string $damageItem,
        public readonly bool $isSecondaryFireMode,
    ) {
    }
}
