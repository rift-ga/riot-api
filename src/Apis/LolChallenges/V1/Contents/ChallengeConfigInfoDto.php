<?php

namespace Rift\RiotApi\Apis\LolChallenges\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property array<string, array<string, string>> $localizedNames
 * @property string $state DISABLED - not visible and not calculated, HIDDEN - not visible, but calculated, ENABLED - visible and calculated, ARCHIVED - visible, but not calculated
 * @property string $tracking LIFETIME - stats are incremented without reset, SEASON - stats are accumulated by season and reset at the beginning of new season
 * @property array<string, int> $thresholds
 */
class ChallengeConfigInfoDto extends BaseContent
{
    final protected function __construct(
        public readonly int $losses,
        public readonly int $id,
        public readonly array $localizedNames,
        public readonly string $state,
        public readonly string $tracking,
        public readonly int $startTimestamp,
        public readonly int $endTimestamp,
        public readonly bool $leaderboard,
        public readonly array $thresholds,
    ) {
    }
}
