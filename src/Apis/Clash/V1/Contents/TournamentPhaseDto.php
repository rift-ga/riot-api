<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class TournamentPhaseDto extends BaseContent
{
    final protected function __construct(
        public readonly int $id,
        public readonly int $registrationTime,
        public readonly int $startTime,
        public readonly bool $cancelled,
    ) {
    }
}
