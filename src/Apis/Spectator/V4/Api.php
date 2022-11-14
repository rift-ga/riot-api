<?php

namespace Rift\RiotApi\Apis\Spectator\V4;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\Spectator\V4\Contents\CurrentGameInfo;
use Rift\RiotApi\Apis\Spectator\V4\Contents\FeaturedGamesDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get current game information for the given summoner ID.
     *
     * @see https://developer.riotgames.com/apis#spectator-v4/GET_getCurrentGameInfoBySummoner
     *
     * @return CurrentGameInfo
     */
    public function getCurrentGameInfoBySummoner(string $encryptedSummonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/spectator/v4/active-games/by-summoner/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: CurrentGameInfo::class);
    }

    /**
     * Get list of featured games.
     *
     * @see https://developer.riotgames.com/apis#spectator-v4/GET_getFeaturedGames
     *
     * @return FeaturedGamesDto
     */
    public function getFeaturedGames()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/spectator/v4/featured-games',
        );

        return $this->client->request(requestData: $requestData, output: FeaturedGamesDto::class);
    }
}
