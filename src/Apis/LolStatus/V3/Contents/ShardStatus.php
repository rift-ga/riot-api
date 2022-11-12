<?php

namespace Rift\RiotApi\Apis\LolStatus\V3\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string[] $locales
 * @property Service[] $services
 */
class ShardStatus extends BaseContent
{
    final protected function __construct(
        public readonly array $locales,
        public readonly string $hostname,
        public readonly string $name,
        public readonly array $services,
        public readonly string $slug,
        public readonly string $region_tag,
    ) {
    }
}
