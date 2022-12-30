<?php

namespace Rift\RiotApi\Apis\TftStatus\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $id
 * @property string $author
 * @property bool $publish
 * @property string $publish_locations Legal values: riotclient, riotstatus, game
 * @property ContentDto[] $translations
 * @property string $created_at
 * @property string $updated_at
 */
class UpdateDto extends BaseContent
{
    final protected function __construct(
        public readonly int $id,
        public readonly string $author,
        public readonly bool $publish,
        public readonly string $publish_locations,
        public readonly array $translations,
        public readonly string $created_at,
        public readonly string $updated_at,
    ) {
    }
}
