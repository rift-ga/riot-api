<?php

namespace Rift\RiotApi\Apis\Summoner\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * Represents a summoner.
 */
class SummonerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $accountId,
        public readonly int $profileIconId,
        public readonly string $revisionDate,
        public readonly string $name,
        public readonly string $id,
        public readonly string $puuid,
        public readonly int $summonerLevel,
    ) {}
}
