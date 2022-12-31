<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property MatchInfoDto $matchInfo
 * @property PlayerDto[] $players
 * @property CoachDto[] $coaches
 * @property TeamDto[] $teams
 * @property RoundResultDto[]  $roundResults
 */
class MatchDto extends BaseContent
{
    final protected function __construct(
        public readonly MatchInfoDto $matchInfo,
        public readonly array $players,
        public readonly array $coaches,
        public readonly array $teams,
        public readonly array $roundResults,
    ) {
    }
}
