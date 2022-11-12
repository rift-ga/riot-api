<?php

namespace Rift\RiotApi\Apis\LorMatch\V1;

use Rift\RiotApi\Apis\LorMatch\V1\Contents\MatchDto;

interface Contract
{
    /**
     * Get a list of match ids by PUUID.
     *
     * @see https://developer.riotgames.com/apis#lor-match-v1/GET_getMatchIdsByPUUID
     *
     * @return string[]
     */
    public function getMatchIdsByPUUID(string $puuid);

    /**
     * Get match by id.
     *
     * @see https://developer.riotgames.com/apis#lor-match-v1/GET_getMatch
     *
     * @return MatchDto
     */
    public function getMatch(string $matchId);
}
