<?php

namespace Rift\RiotApi\Apis\LorStatus\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class ContentDto extends BaseContent
{
    final protected function __construct(
        public readonly string $locale,
        public readonly string $content,
    ) {
    }
}
