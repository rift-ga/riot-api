<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class PlayerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $summonerId,
        public readonly string $teamId,
        public readonly string $position,
        public readonly string $role,
    ) {}
}
