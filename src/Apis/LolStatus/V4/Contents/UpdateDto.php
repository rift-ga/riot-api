<?php

namespace Rift\RiotApi\Apis\LolStatus\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string[]     $publish_locations (Legal values: riotclient, riotstatus, game)
 * @property ContentDto[] $translations
 */
class UpdateDto extends BaseContent
{
    final protected function __construct(
        public readonly int $id,
        public readonly string $author,
        public readonly bool $publish,
        public readonly array $publish_locations,
        public readonly array $translations,
        public readonly string $created_at,
        public readonly string $updated_at,
    ) {
    }
}
