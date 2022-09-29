<?php

namespace Rift\RiotApi\ChampionMastery\V4;

use Rift\RiotApi\BaseApi;
use Rift\RiotApi\ChampionMastery\V4\Contents\ChampionMasteryDTO;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get all champion mastery entries sorted by number of champion points descending,.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getAllChampionMasteries
     *
     * @return ChampionMasteryDTO[]
     */
    public function getAllChampionMasteries(string $encryptedSummonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ]
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get a champion mastery by player ID and champion ID.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMastery
     *
     * @return ChampionMasteryDTO
     */
    public function getChampionMastery(string $encryptedSummonerId, string $championId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerId}/by-champion/{championId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
                '{championId}' => $championId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: ChampionMasteryDTO::class);
    }

    /**
     * Get specified number of top champion mastery entries sorted by number of champion points descending.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getTopChampionMasteries
     *
     * @return ChampionMasteryDTO[]
     */
    public function getTopChampionMasteries(string $encryptedSummonerId, int $count = 3)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/champion-mastery/v4/champion-masteries/by-summoner/{encryptedSummonerId}/top',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ],
            queryParams: [
                'count' => $count,
            ]
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get a player's total champion mastery score, which is the sum of individual champion mastery levels.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMasteryScore
     *
     * @return int
     */
    public function getChampionMasteryScore(string $encryptedSummonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/champion-mastery/v4/scores/by-summoner/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ]
        );

        return $this->client->request(requestData: $requestData);
    }
}
