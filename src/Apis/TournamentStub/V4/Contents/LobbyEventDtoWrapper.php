<?php

namespace Rift\RiotApi\Apis\TournamentStub\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property LobbyEventDto[] $eventList
 */
class LobbyEventDtoWrapper extends BaseContent
{
    final protected function __construct(
        public readonly array $eventList,
    ) {
    }
}
