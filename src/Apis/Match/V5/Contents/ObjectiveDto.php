<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class ObjectiveDto extends BaseContent
{
    final protected function __construct(
        public readonly bool $first,
        public readonly int $kills,
    ) {
    }
}
