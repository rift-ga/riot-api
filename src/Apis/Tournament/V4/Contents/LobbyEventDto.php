<?php

namespace Rift\RiotApi\Apis\Tournament\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $timestamp Timestamp from the event
 * @property string $eventType The type of event that was triggered
 * @property string $summonerId The summonerId that triggered the event (Encrypted)
 */
class LobbyEventDto extends BaseContent
{
    final protected function __construct(
        public readonly string $timestamp,
        public readonly string $eventType,
        public readonly string $summonerId,
    ) {
    }
}
