<?php

namespace Rift\RiotApi\Apis\ChampionMastery\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * Contains single Champion Mastery information for player and champion combination.
 */
class ChampionMasteryDto extends BaseContent
{
    final protected function __construct(
        public readonly int $championPointsUntilNextLevel,
        public readonly bool $chestGranted,
        public readonly int $championId,
        public readonly int $lastPlayTime,
        public readonly int $championLevel,
        public readonly string $summonerId,
        public readonly int $championPoints,
        public readonly int $championPointsSinceLastLevel,
        public readonly int $tokensEarned,
    ) {}
}
