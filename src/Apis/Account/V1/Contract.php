<?php

namespace Rift\RiotApi\Apis\Account\V1;

use Rift\RiotApi\Account\V1\ActiveShardDto;
use Rift\RiotApi\Apis\Account\V1\Contents\AccountDto;

interface Contract
{
    /**
     * Get account by puuid.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getByPuuid
     *
     * @return AccountDto
     */
    public function getByPUUID(string $puuid);

    /**
     * Get account by riot id.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getByRiotId
     *
     * @return AccountDto
     */
    public function getByRiotId(string $gameName, string $tagLine);

    /**
     * Get account by access token.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getByAccessToken
     *
     * @return AccountDto
     */
    public function getByAccessToken(string $accessToken);

    /**
     * Get active shard for a player.
     *
     * @see https://developer.riotgames.com/apis#account-v1/GET_getActiveShard
     *
     * @return ActiveShardDto
     */
    public function getActiveShard(string $game, string $puuid);
}
