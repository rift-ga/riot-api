<?php

namespace Rift\RiotApi\Apis\LolStatus\V3\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property Translation[] $translations
 */
class Message extends BaseContent
{
    final protected function __construct(
        public readonly string $id,
        public readonly string $author,
        public readonly string $heading,
        public readonly string $content,
        public readonly string $severity,
        public readonly string $created_at,
        public readonly string $updated_at,
        public readonly array $translations,
    ) {
    }
}
