<?php

namespace Rift\RiotApi\Apis\LorDeck\V1;

use Rift\RiotApi\Apis\LorDeck\V1\Contents\DeckDto;

interface Contract
{
    /**
     * Get a list of the calling user's decks.
     *
     * @see https://developer.riotgames.com/apis#lor-deck-v1/GET_getDecks
     *
     * @return DeckDto[]
     */
    public function getDecks();

    /**
     * Create a new deck for the calling user.
     *
     * @see https://developer.riotgames.com/apis#lor-deck-v1/POST_createDeck
     *
     * @return string
     */
    public function createDeck(string $deck);
}
