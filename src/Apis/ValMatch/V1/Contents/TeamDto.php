<?php

namespace Rift\RiotApi\Apis\ValMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $teamId       This is an arbitrary string. Red and Blue in bomb modes. The puuid of the player in deathmatch.
 * @property bool   $won
 * @property int    $roundsPlayed
 * @property int    $roundsWon
 * @property int    $numPoints    Team points scored. Number of kills in deathmatch.
 */
class TeamDto extends BaseContent
{
    final protected function __construct(
        public readonly string $teamId,
        public readonly bool $won,
        public readonly int $roundsPlayed,
        public readonly int $roundsWon,
        public readonly int $numPoints,
    ) {
    }
}
