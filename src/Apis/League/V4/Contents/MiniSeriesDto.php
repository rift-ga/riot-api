<?php

namespace Rift\RiotApi\Apis\League\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

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
