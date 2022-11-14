<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class BanDto extends BaseContent
{
    final protected function __construct(
        public readonly int $championId,
        public readonly int $pickTurn,
    ) {
    }
}
