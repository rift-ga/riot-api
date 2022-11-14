<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class PerkStyleSelectionDto extends BaseContent
{
    final protected function __construct(
        public readonly int $perk,
        public readonly int $var1,
        public readonly int $var2,
        public readonly int $var3,
    ) {
    }
}
