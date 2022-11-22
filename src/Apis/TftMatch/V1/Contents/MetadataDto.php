<?php

namespace Rift\RiotApi\Apis\TftMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string   $data_version Match data version.
 * @property string   $match_id     Match id.
 * @property string[] $participants A list of participant PUUIDs.
 */
class MetadataDto extends BaseContent
{
    final protected function __construct(
        public readonly string $data_version,
        public readonly string $match_id,
        public readonly array $participants,
    ) {
    }
}
