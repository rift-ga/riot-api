<?php

namespace Rift\RiotApi\Apis\LolStatus\V3\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property Incident[] $incidents
 */
class Service extends BaseContent
{
    final protected function __construct(
        public readonly string $name,
        public readonly string $slug,
        public readonly string $status,
        public readonly array $incidents,
    ) {
    }
}
