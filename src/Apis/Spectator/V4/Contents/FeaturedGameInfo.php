<?php

namespace Rift\RiotApi\Apis\Spectator\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string           $gameMode          The game mode (Legal values: CLASSIC, ODIN, ARAM, TUTORIAL, ONEFORALL, ASCENSION, FIRSTBLOOD, KINGPORO)
 * @property int              $gameLength        The amount of time in seconds that has passed since the game started
 * @property int              $mapId             The ID of the map
 * @property string           $gameType          The game type (Legal values: CUSTOM_GAME, MATCHED_GAME, TUTORIAL_GAME)
 * @property BannedChampion[] $bannedChampions   Banned champion information
 * @property int              $gameId            The ID of the game
 * @property Observer         $observers         The observer information
 * @property int              $gameQueueConfigId The queue type (queue types are documented on the Game Constants page)
 * @property int              $gameStartTime     The game start time represented in epoch milliseconds
 * @property Participant[]    $participants      The participant information
 * @property string           $platformId        The ID of the platform on which the game is being played
 */
class FeaturedGameInfo extends BaseContent
{
    final protected function __construct(
        public readonly string $gameMode,
        public readonly int $gameLength,
        public readonly int $mapId,
        public readonly string $gameType,
        public readonly array $bannedChampions,
        public readonly int $gameId,
        public readonly Observer $observers,
        public readonly int $gameQueueConfigId,
        public readonly int $gameStartTime,
        public readonly array $participants,
        public readonly string $platformId,
    ) {
    }
}
