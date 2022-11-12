<?php

namespace Rift\RiotApi\Apis\LorMatch\V1\Contents;

use Rift\RiotApi\Abstracts\BaseContent;

/**
 * @property string $deck_code Code for the deck played. Refer to LOR documentation for details on deck codes.
 * @property string[] $factions
 * @property int $order_of_play The order in which the players took turns.
 */
class PlayerDto extends BaseContent
{
    final protected function __construct(
        public readonly string $puuid,
        public readonly string $deck_id,
        public readonly string $deck_code,
        public readonly array $factions,
        public readonly string $game_outcome,
        public readonly int $order_of_play,
    ) {
    }
}
