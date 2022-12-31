<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $x
 * @property int $y
 */
class LocationDto extends BaseContent
{
    final protected function __construct(
        public readonly int $x,
        public readonly int $y,
    ) {
    }
}
