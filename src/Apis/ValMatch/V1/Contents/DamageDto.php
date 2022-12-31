<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $receiver PUUID
 * @property int $damage
 * @property int $legshots
 * @property int $bodyshots
 * @property int $headshots
 */
class DamageDto extends BaseContent
{
    final protected function __construct(
        public readonly string $receiver,
        public readonly int $damage,
        public readonly int $legshots,
        public readonly int $bodyshots,
        public readonly int $headshots,
    ) {
    }
}
