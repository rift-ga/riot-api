<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $dataVersion Match data version.
 * @property string $matchId Match id.
 * @property string[] $participants A list of participant PUUIDs.
 */
class MetadataDto extends BaseContent
{
    final protected function __construct(
        public readonly string $dataVersion,
        public readonly string $matchId,
        public readonly array $participants,
    ) {
    }
}
