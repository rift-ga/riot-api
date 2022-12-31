<?php

namespace Rift\RiotApi\Apis\ValRanked\V1;

use Rift\RiotApi\Apis\ValRanked\V1\Contents\LeaderboardDto;

interface Contract
{
    /**
     * Get leaderboard for the competitive queue.
     *
     * @see https://developer.riotgames.com/apis#val-ranked-v1/GET_getLeaderboard
     *
     * @param string $actId Act ids can be found using the val-content API.
     * @param int $size Defaults to 200. Valid values: 1 to 200.
     * @param int $startIndex Defaults to 0.
     *
     * @return LeaderboardDto
     */
    public function getLeaderboard(string $actId, int $size = 200, int $startIndex = 0);
}
