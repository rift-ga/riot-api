<?php

namespace Rift\RiotApi\Apis\LorMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string      $game_mode        (Legal values: Constructed, Expeditions, Tutorial)
 * @property string      $game_type        (Legal values: Ranked, Normal, AI, Tutorial, VanillaTrial, Singleton, StandardGauntlet)
 * @property PlayerDto[] $players
 * @property int         $total_turn_count Total turns taken by both players.
 */
class InfoDto extends BaseContent
{
    final protected function __construct(
        public readonly string $game_mode,
        public readonly string $game_type,
        public readonly string $game_start_time_utc,
        public readonly string $game_version,
        public readonly array $players,
        public readonly int $total_turn_count,
    ) {
    }
}
