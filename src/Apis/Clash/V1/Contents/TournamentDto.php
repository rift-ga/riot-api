<?php

namespace Rift\RiotApi\Apis\Clash\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property TournamentPhaseDto[] $schedule
 */
class TournamentDto extends BaseContent
{
    final protected function __construct(
        public readonly int $id,
        public readonly int $themeId,
        public readonly string $nameKey,
        public readonly string $nameKeySecondary,
        public readonly array $schedule,
    ) {
    }
}
