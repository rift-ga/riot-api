<?php

namespace Rift\RiotApi\Apis\TftMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property MetadataDto $metadata Match metadata.
 * @property InfoDto     $info     Match info.
 */
class MatchDto extends BaseContent
{
    final protected function __construct(
        public readonly MetadataDto $metadata,
        public readonly InfoDto $info,
    ) {
    }
}
