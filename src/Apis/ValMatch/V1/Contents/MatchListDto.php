<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string              $puuid
 * @property MatchlistEntryDto[] $history
 */
class MatchListDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly array $history,
    ) {
    }
}
