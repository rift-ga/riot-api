<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property BanDto[] $bans
 */
class TeamDto extends BaseContent
{
    final protected function __construct(
        public readonly array $bans,
        public readonly ObjectivesDto $objectives,
        public readonly int $teamId,
        public readonly bool $win,
    ) {
    }
}
