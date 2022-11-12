<?php

namespace Rift\RiotApi\Apis\LolChallenges\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class ApexPlayerInfoDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly int $value,
        public readonly int $position,
    ) {
    }
}
