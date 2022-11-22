<?php

namespace Rift\RiotApi\Apis\TftMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property int              $game_datetime  Unix timestamp.
 * @property int              $game_length    Game length in seconds.
 * @property string           $game_variation Game variation key. Game variations documented in TFT static data.
 * @property string           $game_version   Game client version.
 * @property ParticipantDto[] $participants
 * @property int              $queue_id       Please refer to the League of Legends documentation.
 * @property int              $tft_set_number Teamfight Tactics set number.
 */
class InfoDto extends BaseContent
{
    final protected function __construct(
        public readonly int $game_datetime,
        public readonly int $game_length,
        public readonly string $game_variation,
        public readonly string $game_version,
        public readonly array $participants,
        public readonly int $queue_id,
        public readonly int $tft_set_number,
    ) {
    }
}
