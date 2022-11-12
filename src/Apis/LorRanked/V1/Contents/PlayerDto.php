<?php

namespace Rift\RiotApi\Apis\LorRanked\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $lp League points.
 */
class PlayerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $name,
        public readonly int $rank,
        public readonly int $lp,
    ) {
    }
}
