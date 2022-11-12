<?php

namespace Rift\RiotApi\Apis\LorRanked\V1;

use Rift\RiotApi\Apis\LorRanked\V1\Contents\LeaderboardDto;

interface Contract
{
    /**
     * Get the players in Master tier.
     *
     * @see https://developer.riotgames.com/apis#lor-ranked-v1/GET_getLeaderboards
     *
     * @return LeaderboardDto
     */
    public function getLeaderboards();
}
