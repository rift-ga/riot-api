<?php

namespace Rift\RiotApi\Apis\League\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property LeagueItemDto[] $entries
 */
class LeagueListDto extends BaseContent
{
    final protected function __construct(
        public readonly string $leagueId,
        public readonly array $entries,
        public readonly string $tier,
        public readonly string $name,
        public readonly string $queue,
    ) {
    }
}
