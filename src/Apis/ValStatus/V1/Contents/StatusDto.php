<?php

namespace Rift\RiotApi\Apis\ValStatus\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $id
 * @property string $maintenance_status Legal values: scheduled, in_progress, complete
 * @property string $incident_severity Legal values: info, warning, critical
 * @property ContentDto[] $titles
 * @property UpdateDto[] $updates
 * @property string $created_at
 * @property string $archive_at
 * @property string $updated_at
 * @property string[] $platforms Legal values: windows, macos, android, ios, ps4, xbone, switch
 */
class StatusDto extends BaseContent
{
    final protected function __construct(
        public readonly int $id,
        public readonly string $maintenance_status,
        public readonly string $incident_severity,
        public readonly array $titles,
        public readonly array $updates,
        public readonly string $created_at,
        public readonly string $archive_at,
        public readonly string $updated_at,
        public readonly array $platforms,
    ) {
    }
}
