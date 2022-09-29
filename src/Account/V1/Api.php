<?php

namespace Rift\RiotApi\Account\V1;

use Rift\RiotApi\Account\V1\Contents\AccountDto;
use Rift\RiotApi\Account\V1\Contents\ActiveShardDto;
use Rift\RiotApi\BaseApi;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get account by puuid.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getByPuuid
     *
     * @return AccountDto
     */
    public function getByPUUID(string $puuid)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/riot/account/v1/accounts/by-puuid/{puuid}',
            pathParams: [
                '{puuid}' => $puuid,
            ]
        );

        return $this->client->request(requestData: $requestData, output: AccountDto::class);
    }

    /**
     * Get account by riot id.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getByRiotId
     *
     * @return AccountDto
     */
    public function getByRiotId(string $gameName, string $tagLine)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/riot/account/v1/accounts/by-riot-id/{gameName}/{tagLine}',
            pathParams: [
                '{gameName}' => $gameName,
                '{tagLine}' => $tagLine,
            ]
        );

        return $this->client->request(requestData: $requestData, output: AccountDto::class);
    }

    /**
     * Get account by access token.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getByAccessToken
     *
     * @return AccountDto
     */
    public function getByAccessToken(string $accessToken)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/riot/account/v1/accounts/me',
            headers: [
                'Authorization', $accessToken,
            ]
        );

        return $this->client->request(requestData: $requestData, output: AccountDto::class);
    }

    /**
     * Get active shard for a player
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getActiveShard
     *
     * @return ActiveShardDto
     */
    public function getActiveShard(string $game, string $puuid)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/riot/account/v1/active-shards/by-game/{game}/by-puuid/{puuid}',
            pathParams: [
                '{game}' => $game,
                '{puuid}' => $puuid,
            ]
        );

        return $this->client->request(requestData: $requestData, output: ActiveShardDto::class);
    }
}
