<?php

namespace Rift\RiotApi\Apis\Tournament\V4\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $code The tournament code.
 * @property string $spectators The spectator mode for the tournament code game.
 * @property string $lobbyName The lobby name for the tournament code game.
 * @property string $metaData The metadata for tournament code.
 * @property string $password The password for the tournament code game.
 * @property int $teamSize The team size for the tournament code game.
 * @property int $providerId The provider's ID.
 * @property string $pickType The pick mode for tournament code game.
 * @property int $tournamentId The tournament's ID.
 * @property int $id The tournament code's ID.
 * @property string $region The tournament code's region. (Legal values: BR, EUNE, EUW, JP, LAN, LAS, NA, OCE, PBE, RU, TR)
 * @property string $map The game map for the tournament code game
 * @property string[] $participants The summonerIds of the participants (Encrypted)
 */
class TournamentCodeDto extends BaseContent
{
    final protected function __construct(
        public readonly string $code,
        public readonly string $spectators,
        public readonly string $lobbyName,
        public readonly string $metaData,
        public readonly string $password,
        public readonly int $teamSize,
        public readonly int $providerId,
        public readonly string $pickType,
        public readonly int $tournamentId,
        public readonly int $id,
        public readonly string $region,
        public readonly string $map,
        public readonly array $participants,
    ) {
    }
}
