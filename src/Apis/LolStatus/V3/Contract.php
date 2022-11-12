<?php

namespace Rift\RiotApi\Apis\LolStatus\V3;

use Rift\RiotApi\Apis\LolStatus\V3\Contents\ShardStatus;

interface Contract
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
    public function getShardData();
}
