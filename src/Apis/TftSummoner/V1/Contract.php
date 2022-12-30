<?php

namespace Rift\RiotApi\Apis\TftSummoner\V1;

use Rift\RiotApi\Apis\TftSummoner\V1\Contents\SummonerDto;

interface Contract
{
    /**
     * Get a summoner by account ID.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getByAccountId
     *
     * @return SummonerDto
     */
    public function getByAccountId(string $encryptedAccountId);

    /**
     * Get a summoner by summoner name.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getBySummonerName
     *
     * @return SummonerDto
     */
    public function getBySummonerName(string $summonerName);

    /**
     * Get a summoner by PUUID.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getByPUUID
     *
     * @return SummonerDto
     */
    public function getByPUUID(string $encryptedPUUID);

    /**
     * Get a summoner by access token.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getByAccessToken
     *
     * @return SummonerDto
     */
    public function getByAccessToken(string $accessToken);

    /**
     * Get a summoner by summoner ID.
     *
     * @see https://developer.riotgames.com/apis#tft-summoner-v1/GET_getBySummonerId
     *
     * @return SummonerDto
     */
    public function getBySummonerId(string $encryptedSummonerId);
}
