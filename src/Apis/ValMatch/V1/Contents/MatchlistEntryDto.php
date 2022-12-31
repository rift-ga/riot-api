<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $matchId
 * @property int $gameStartTimeMillis
 * @property string $teamId
 */
class MatchlistEntryDto extends BaseContent
{
    final protected function __construct(
        public readonly string $matchId,
        public readonly int $gameStartTimeMillis,
        public readonly string $teamId,
    ) {
    }
}
