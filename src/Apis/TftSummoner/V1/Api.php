<?php

namespace Rift\RiotApi\Apis\TftSummoner\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\TftSummoner\V1\Contents\SummonerDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get a summoner by account ID.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getByAccountId
     *
     * @return SummonerDto
     */
    public function getByAccountId(string $encryptedAccountId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/summoner/v1/summoners/by-account/{encryptedAccountId}',
            pathParams: [
                '{encryptedAccountId}' => $encryptedAccountId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDto::class);
    }

    /**
     * Get a summoner by summoner name.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getBySummonerName
     *
     * @return SummonerDto
     */
    public function getBySummonerName(string $summonerName)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/summoner/v1/summoners/by-name/{summonerName}',
            pathParams: [
                '{summonerName}' => $summonerName,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDto::class);
    }

    /**
     * Get a summoner by PUUID.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getByPUUID
     *
     * @return SummonerDto
     */
    public function getByPUUID(string $encryptedPUUID)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/summoner/v1/summoners/by-puuid/{encryptedPUUID}',
            pathParams: [
                '{encryptedPUUID}' => $encryptedPUUID,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDto::class);
    }

    /**
     * Get a summoner by access token.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getByAccessToken
     *
     * @return SummonerDto
     */
    public function getByAccessToken(string $accessToken)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/summoner/v1/summoners/me',
            headers: [
                'Authorization', $accessToken,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDto::class);
    }

    /**
     * Get a summoner by summoner ID.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getBySummonerId
     *
     * @return SummonerDto
     */
    public function getBySummonerId(string $encryptedSummonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/summoner/v1/summoners/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: SummonerDto::class);
    }
}
