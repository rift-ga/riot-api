<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property PlayerDto[] $players
 */
class TeamDto extends BaseContent
{
    final protected function __construct(
        public readonly string $id,
        public readonly int $tournamentId,
        public readonly string $name,
        public readonly int $iconId,
        public readonly int $tier,
        public readonly string $captain,
        public readonly string $abbreviation,
        public readonly array $players,
    ) {
    }
}
