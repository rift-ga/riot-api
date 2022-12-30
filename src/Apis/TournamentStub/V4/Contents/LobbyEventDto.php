<?php

namespace Rift\RiotApi\Apis\TournamentStub\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $summonerId The summonerId that triggered the event (Encrypted)
 * @property string $eventType The type of event that was triggered
 * @property string $timestamp Timestamp from the event
 */
class LobbyEventDto extends BaseContent
{
    final protected function __construct(
        public readonly string $summonerId,
        public readonly string $eventType,
        public readonly string $timestamp,
    ) {
    }
}
