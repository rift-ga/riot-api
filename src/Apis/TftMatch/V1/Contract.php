<?php

namespace Rift\RiotApi\Apis\TftMatch\V1;

use Rift\RiotApi\Apis\TftMatch\V1\Contents\MatchDto;

interface Contract
{
    /**
     * Get a list of match ids by PUUID.
     *
     * @see https://developer.riotgames.com/apis#tft-match-v1/GET_getMatchIdsByPUUID
     *
     * @return string[]
     */
    public function getMatchIdsByPUUID(string $puuid, int $start = 0, int $startTime = null, int $endTime = null, int $count = 20);

    /**
     * Get a match by match id.
     *
     * @see https://developer.riotgames.com/apis#tft-match-v1/GET_getMatch
     *
     * @return MatchDto
     */
    public function getMatch(string $matchId);
}
