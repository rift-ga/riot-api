<?php

namespace Rift\RiotApi\Apis\LorDeck\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LorDeck\V1\Contents\DeckDto;
use Rift\RiotApi\RequestData;

/**
 * The AMERICAS routing value serves the AMERICAS shard. The EUROPE routing value serves the EUROPE shard. The SEA routing value serves the APAC shard (previously was ASIA and SEA).
 */
class Api extends BaseApi implements Contract
{
    /**
     * Get a list of the calling user's decks.
     *
     * @see https://developer.riotgames.com/apis#lor-deck-v1/GET_getDecks
     *
     * @return DeckDto[]
     */
    public function getDecks()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lor/deck/v1/decks/me',
        );

        return $this->client->request(requestData: $requestData, output: DeckDto::class, arrayOutput: true);
    }

    /**
     * Create a new deck for the calling user.
     *
     * @see https://developer.riotgames.com/apis#lor-deck-v1/POST_createDeck
     *
     * @return string
     */
    public function createDeck(string $deck)
    {
        $requestData = new RequestData(
            method: 'POST',
            path: '/lor/deck/v1/decks/me',
            bodyParams: [
                'deck' => $deck,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }
}
