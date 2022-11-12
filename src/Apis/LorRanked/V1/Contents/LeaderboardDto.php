<?php

namespace Rift\RiotApi\Apis\LorRanked\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property PlayerDto[] $players A list of players in Master tier.
 */
class LeaderboardDto extends BaseContent
{
    final protected function __construct(
        public readonly array $players,
    ) {
    }
}
