<?php

namespace Rift\RiotApi\Apis\LorDeck\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class DeckDto extends BaseContent
{
    final protected function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly string $code,
    ) {
    }
}
