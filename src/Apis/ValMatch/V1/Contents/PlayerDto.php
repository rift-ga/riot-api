<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $puuid
 * @property string $gameName
 * @property string $tagLine
 * @property string $teamId
 * @property string $partyId
 * @property string $characterId
 * @property PlayerStatsDto $stats
 * @property int $competitiveTier
 * @property string $playerCard
 * @property string $playerTitle
 */
class PlayerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly string $gameName,
        public readonly string $tagLine,
        public readonly string $teamId,
        public readonly string $partyId,
        public readonly string $characterId,
        public readonly PlayerStatsDto $stats,
        public readonly int $competitiveTier,
        public readonly string $playerCard,
        public readonly string $playerTitle,
    ) {
    }
}
