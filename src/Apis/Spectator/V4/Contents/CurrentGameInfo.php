<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int                      $gameId            The ID of the game
 * @property string                   $gameType          The game type
 * @property int                      $gameStartTime     The game start time represented in epoch milliseconds
 * @property int                      $mapId             The ID of the map
 * @property int                      $gameLength        The amount of time in seconds that has passed since the game started
 * @property string                   $platformId        The ID of the platform on which the game is being played
 * @property string                   $gameMode          The game mode
 * @property BannedChampion[]         $bannedChampions   Banned champion information
 * @property int                      $gameQueueConfigId The queue type (queue types are documented on the Game Constants page)
 * @property Observer                 $observers         The observer information
 * @property CurrentGameParticipant[] $participants      The participant information
 */
class CurrentGameInfo extends BaseContent
{
    final protected function __construct(
        public readonly int $gameId,
        public readonly string $gameType,
        public readonly int $gameStartTime,
        public readonly int $mapId,
        public readonly int $gameLength,
        public readonly string $platformId,
        public readonly string $gameMode,
        public readonly array $bannedChampions,
        public readonly int $gameQueueConfigId,
        public readonly Observer $observers,
        public readonly array $participants,
    ) {
    }
}
