<?php

namespace Rift\RiotApi\Apis\TftLeague\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $leagueId
 * @property LeagueItemDTO[] $entries
 * @property string $tier
 * @property string $name
 * @property string $queue
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
