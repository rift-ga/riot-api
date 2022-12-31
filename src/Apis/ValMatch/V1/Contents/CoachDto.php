<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $puuid
 * @property string $teamId
 */
class CoachDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly string $teamId,
    ) {
    }
}
