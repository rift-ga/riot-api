<?php

namespace Rift\RiotApi\Apis\TftStatus\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $locale
 * @property string $content
 */
class ContentDto extends BaseContent
{
    final protected function __construct(
        public readonly string $locale,
        public readonly string $content,
    ) {
    }
}
