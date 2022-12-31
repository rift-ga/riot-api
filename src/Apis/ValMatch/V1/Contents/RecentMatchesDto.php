<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $currentTime
 * @property string[] $matchIds A list of recent match ids.
 */
class RecentMatchesDto extends BaseContent
{
    final protected function __construct(
        public readonly int $currentTime,
        public readonly array $matchIds,
    ) {
    }
}
