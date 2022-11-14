<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property PerkStyleDto[] $styles
 */
class PerksDto extends BaseContent
{
    final protected function __construct(
        public readonly PerkStatsDto $statPerks,
        public readonly array $styles,
    ) {
    }
}
