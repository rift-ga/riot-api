<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $puuid
 * @property float $viewRadians
 * @property LocationDto $location
 */
class PlayerLocationsDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly float $viewRadians,
        public readonly LocationDto $location,
    ) {
    }
}
