<?php

namespace Rift\RiotApi\Apis\TftMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property CompanionDto $companion               Participant's companion.
 * @property int          $gold_left               Gold left after participant was eliminated.
 * @property int          $last_round              The round the participant was eliminated in. Note: If the player was eliminated in stage 2-1 their last_round would be 5.
 * @property int          $level                   Participant Little Legend level. Note: This is not the number of active units.
 * @property int          $placement               Participant placement upon elimination.
 * @property int          $players_eliminated      Number of players the participant eliminated.
 * @property string       $puuid
 * @property int          $time_eliminated         The number of seconds before the participant was eliminated.
 * @property int          $total_damage_to_players Damage the participant dealt to other players.
 * @property TraitDto[]   $traits                  A complete list of traits for the participant's active units.
 * @property UnitDto[]    $units                   A list of active units for the participant.
 */
class ParticipantDto extends BaseContent
{
    final protected function __construct(
        public readonly CompanionDto $companion,
        public readonly int $gold_left,
        public readonly int $last_round,
        public readonly int $level,
        public readonly int $placement,
        public readonly int $players_eliminated,
        public readonly string $puuid,
        public readonly int $time_eliminated,
        public readonly int $total_damage_to_players,
        public readonly array $traits,
        public readonly array $units,
    ) {
    }
}
