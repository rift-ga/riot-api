<?php

namespace Rift\RiotApi\Apis\TftStatus\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string      $id
 * @property string      $name
 * @property string[]    $locales
 * @property StatusDto[] $maintenances
 * @property StatusDto[] $incidents
 */
class PlatformDataDto extends BaseContent
{
    final protected function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly array $locales,
        public readonly array $maintenances,
        public readonly array $incidents,
    ) {
    }
}
