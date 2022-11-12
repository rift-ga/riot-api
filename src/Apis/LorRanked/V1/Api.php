<?php

namespace Rift\RiotApi\Apis\LorRanked\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LorRanked\V1\Contents\LeaderboardDto;
use Rift\RiotApi\RequestData;

/**
 * The AMERICAS routing value serves the AMERICAS shard. The EUROPE routing value serves the EUROPE shard. The SEA routing value serves the APAC shard (previously was ASIA and SEA).
 */
class Api extends BaseApi implements Contract
{
    /**
     * Get the players in Master tier.
     *
     * @see https://developer.riotgames.com/apis#lor-ranked-v1/GET_getLeaderboards
     *
     * @return LeaderboardDto
     */
    public function getLeaderboards()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lor/ranked/v1/leaderboards',
        );

        return $this->client->request(requestData: $requestData, output: LeaderboardDto::class);
    }
}
