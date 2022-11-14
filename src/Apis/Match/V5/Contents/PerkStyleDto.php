<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property PerkStyleSelectionDto[] $selections
 */
class PerkStyleDto extends BaseContent
{
    final protected function __construct(
        public readonly string $description,
        public readonly array $selections,
        public readonly int $style,
    ) {
    }
}
