<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

class ObjectivesDto extends BaseContent
{
    final protected function __construct(
        public readonly ObjectiveDto $baron,
        public readonly ObjectiveDto $champion,
        public readonly ObjectiveDto $dragon,
        public readonly ObjectiveDto $inhibitor,
        public readonly ObjectiveDto $riftHerald,
        public readonly ObjectiveDto $tower,
    ) {
    }
}
