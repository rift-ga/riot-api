<?php

namespace Rift\RiotApi\Apis\LolStatus\V3\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class Translation extends BaseContent
{
    final protected function __construct(
        public readonly string $updated_at,
        public readonly string $locale,
        public readonly string $content,
    ) {
    }
}
