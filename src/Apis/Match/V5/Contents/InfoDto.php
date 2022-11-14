<?php

namespace Rift\RiotApi\Apis\Match\V5\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int $gameCreation Unix timestamp for when the game is created on the game server (i.e., the loading screen).
 * @property int $gameDuration Prior to patch 11.20, this field returns the game length in milliseconds calculated from gameEndTimestamp - gameStartTimestamp. Post patch 11.20, this field returns the max timePlayed of any participant in the game in seconds, which makes the behavior of this field consistent with that of match-v4. The best way to handling the change in this field is to treat the value as milliseconds if the gameEndTimestamp field isn't in the response and to treat the value as seconds if gameEndTimestamp is in the response.
 * @property int $gameEndTimestamp Unix timestamp for when match ends on the game server. This timestamp can occasionally be significantly longer than when the match "ends". The most reliable way of determining the timestamp for the end of the match would be to add the max time played of any participant to the gameStartTimestamp. This field was added to match-v5 in patch 11.20 on Oct 5th, 2021.
 * @property string $gameMode Refer to the Game Constants documentation.
 * @property int $gameStartTimestamp Unix timestamp for when match starts on the game server.
 * @property string $gameVersion The first two parts can be used to determine the patch a game was played on.
 * @property int $mapId Refer to the Game Constants documentation.
 * @property ParticipantDto[] $participants
 * @property string $platformId Platform where the match was played.
 * @property int $queueId Refer to the Game Constants documentation.
 * @property TeamDto[] $teams
 * @property string $tournamentCode Tournament code used to generate the match. This field was added to match-v5 in patch 11.13 on June 23rd, 2021.
 */
class InfoDto extends BaseContent
{
    final protected function __construct(
        public readonly int $gameCreation,
        public readonly int $gameDuration,
        public readonly int $gameEndTimestamp,
        public readonly int $gameId,
        public readonly string $gameMode,
        public readonly string $gameName,
        public readonly int $gameStartTimestamp,
        public readonly string $gameType,
        public readonly string $gameVersion,
        public readonly int $mapId,
        public readonly array $participants,
        public readonly string $platformId,
        public readonly int $queueId,
        public readonly array $teams,
        public readonly string $tournamentCode,
    ) {
    }
}
