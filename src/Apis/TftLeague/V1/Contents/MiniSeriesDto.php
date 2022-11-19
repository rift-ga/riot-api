<?php

namespace Rift\RiotApi\Apis\TftLeague\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int    $losses
 * @property string $progress
 * @property int    $target
 * @property int    $wins
 */
class MiniSeriesDto extends BaseContent
{
    final protected function __construct(
        public readonly int $losses,
        public readonly string $progress,
        public readonly int $target,
        public readonly int $wins,
    ) {
    }
}
