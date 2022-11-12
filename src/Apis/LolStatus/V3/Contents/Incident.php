<?php

namespace Rift\RiotApi\Apis\LolStatus\V3\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property Message[] $updates
 */
class Incident extends BaseContent
{
    final protected function __construct(
        public readonly int $id,
        public readonly bool $active,
        public readonly string $created_at,
        public readonly array $updates,
    ) {
    }
}
