<?php

namespace Rift\RiotApi\Apis\Match\V5;

use Rift\RiotApi\Apis\Match\V5\Contents\MatchDto;

interface Contract
{
    /**
     * Get a list of match ids by puuid.
     *
     * @see https://developer.riotgames.com/apis#match-v5/GET_getMatchIdsByPUUID
     *
     * @param string $puuid
     * @param int|null $startTime Epoch timestamp in seconds. The matchlist started storing timestamps on June 16th, 2021. Any matches played before June 16th, 2021 won't be included in the results if the startTime filter is set.
     * @param int|null $endTime Epoch timestamp in seconds.
     * @param int|null $queue Filter the list of match ids by a specific queue id. This filter is mutually inclusive of the type filter meaning any match ids returned must match both the queue and type filters.
     * @param string|null $type Filter the list of match ids by the type of match. This filter is mutually inclusive of the queue filter meaning any match ids returned must match both the queue and type filters.
     * @param int $start Defaults to 0. Start index.
     * @param int $count Defaults to 20. Valid values: 0 to 100. Number of match ids to return.
     * @return string[]
     */
    public function getMatchIdsByPUUID(
        string $puuid,
        ?int $startTime = null,
        ?int $endTime = null,
        ?int $queue = null,
        ?string $type = null,
        int $start = 0,
        int $count = 20,
    );

    /**
     * Get a match by match id.
     *
     * @see https://developer.riotgames.com/apis#match-v5/GET_getMatch
     *
     * @return MatchDto
     */
    public function getMatch(string $matchId);

    /**
     * Get a match timeline by match id.
     *
     * @see https://developer.riotgames.com/apis#match-v5/GET_getTimeline
     *
     * @return array
     */
    public function getTimeline(string $matchId);
}
