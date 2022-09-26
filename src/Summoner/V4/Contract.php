<?php

namespace Rift\RiotApi\Summoner\V4;

use Rift\RiotApi\Summoner\V4\Contents\SummonerDTO;

interface Contract
{
    /**
     * Get a summoner by account ID.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getByAccountId
     * @return SummonerDTO
     */
    public function getByAccountId(string $encryptedAccountId);

    /**
     * Get a summoner by summoner name.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getBySummonerName
     * @return SummonerDTO
     */
    public function getBySummonerName(string $summonerName);

    /**
     * Get a summoner by PUUID.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getByPUUID
     * @return SummonerDTO
     */
    public function getByPUUID(string $encryptedPUUID);

    /**
     * Get a summoner by summoner ID.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getBySummonerId
     * @return SummonerDTO
     */
    public function getBySummonerId(string $encryptedSummonerId);

    /**
     * Get a summoner by access token.
     *
     * @see https://developer.riotgames.com/apis#summoner-v4/GET_getByAccessToken
     * @return SummonerDTO
     */
    public function getByAccessToken(string $accessToken);
}
