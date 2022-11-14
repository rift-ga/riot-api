<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $encryptionKey Key used to decrypt the spectator grid game data for playback
 */
class Observer extends BaseContent
{
    final protected function __construct(
        public readonly string $encryptionKey,
    ) {
    }
}
