<?php

namespace Rift\RiotApi\Apis\LolStatus\V3;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LolStatus\V3\Contents\ShardStatus;
use Rift\RiotApi\RequestData;

/**
 * @deprecated This API is being deprecated on Dec 11th, 2020. Please use lol-status-v4 as a replacement.
 */
class Api extends BaseApi implements Contract
{
    /**
     * Get League of Legends status for the given shard.
     *
     * Rate Limit Notes: Requests to this API are not counted against the application Rate Limits.
     *
     * @see https://developer.riotgames.com/apis#lol-status-v3/GET_getShardData
     *
     * @return ShardStatus
     */
    public function getShardData()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/status/v3/shard-data',
        );

        return $this->client->request(requestData: $requestData, output: ShardStatus::class);
    }
}
