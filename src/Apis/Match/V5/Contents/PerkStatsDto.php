<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class PerkStatsDto extends BaseContent
{
    final protected function __construct(
        public readonly int $defense,
        public readonly int $flex,
        public readonly int $offense,
    ) {
    }
}
