<?php

namespace Rift\RiotApi\Apis\LorInventory\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class CardDto extends BaseContent
{
    final protected function __construct(
        public readonly string $code,
        public readonly string $count,
    ) {
    }
}
