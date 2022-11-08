<?php

namespace Rift\RiotApi\Apis\Account\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * Represents a summoner.
 */
class ActiveShardDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly string $game,
        public readonly string $activeShard
    ) {}
}
