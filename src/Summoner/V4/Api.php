<?php

namespace Rift\RiotApi\Summoner\V4;

use Rift\RiotApi\BaseApi;
use Rift\RiotApi\RequestData;
use Rift\RiotApi\Summoner\V4\Contents\SummonerDTO;

class Api extends BaseApi implements Contract
{
    /**
     * Get a summoner by account ID.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getByAccountId
     *
     * @return SummonerDTO
     */
    public function getByAccountId(string $encryptedAccountId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/by-account/{encryptedAccountId}',
            pathParams: [
                '{encryptedAccountId}' => $encryptedAccountId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDTO::class);
    }

    /**
     * Get a summoner by summoner name.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getBySummonerName
     *
     * @return SummonerDTO
     */
    public function getBySummonerName(string $summonerName)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/by-name/{summonerName}',
            pathParams: [
                '{summonerName}' => $summonerName,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDTO::class);
    }

    /**
     * Get a summoner by PUUID.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getByPUUID
     *
     * @return SummonerDTO
     */
    public function getByPUUID(string $encryptedPUUID)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/by-puuid/{encryptedPUUID}',
            pathParams: [
                '{encryptedPUUID}' => $encryptedPUUID,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDTO::class);
    }

    /**
     * Get a summoner by summoner ID.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getBySummonerId
     *
     * @return SummonerDTO
     */
    public function getBySummonerId(string $encryptedSummonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDTO::class);
    }

    /**
     * Get a summoner by access token.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getByAccessToken
     *
     * @return SummonerDTO
     */
    public function getByAccessToken(string $accessToken)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/me',
            headers: [
                'Authorization', $accessToken,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDTO::class);
    }
}
