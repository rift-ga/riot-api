<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $matchId
 * @property string $mapId
 * @property int $gameLengthMillis
 * @property int $gameStartMillis
 * @property string $provisioningFlowId
 * @property bool $isCompleted
 * @property string $customGameName
 * @property string $queueId
 * @property string $gameMode
 * @property bool $isRanked
 * @property string $seasonId
 */
class MatchInfoDto extends BaseContent
{
    final protected function __construct(
        public readonly string $matchId,
        public readonly string $mapId,
        public readonly int $gameLengthMillis,
        public readonly int $gameStartMillis,
        public readonly string $provisioningFlowId,
        public readonly bool $isCompleted,
        public readonly string $customGameName,
        public readonly string $queueId,
        public readonly string $gameMode,
        public readonly bool $isRanked,
        public readonly string $seasonId,
    ) {
    }
}
