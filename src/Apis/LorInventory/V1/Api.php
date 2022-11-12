<?php

namespace Rift\RiotApi\Apis\LorInventory\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LorInventory\V1\Contents\CardDto;
use Rift\RiotApi\RequestData;

/**
 * The AMERICAS routing value serves the AMERICAS shard. The EUROPE routing value serves the EUROPE shard. The SEA routing value serves the APAC shard (previously was ASIA and SEA).
 */
class Api extends BaseApi implements Contract
{
    /**
     * Return a list of cards owned by the calling user.
     *
     * @see https://developer.riotgames.com/apis#lor-inventory-v1/GET_getCards
     *
     * @return CardDto[]
     */
    public function getCards()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lor/inventory/v1/cards/me',
        );

        return $this->client->request(requestData: $requestData, output: CardDto::class, arrayOutput: true);
    }
}
