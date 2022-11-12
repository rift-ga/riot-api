<?php

namespace Rift\RiotApi\Apis\LorMatch\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LorMatch\V1\Contents\MatchDto;
use Rift\RiotApi\RequestData;

/**
 * The AMERICAS routing value serves the AMERICAS shard. The EUROPE routing value serves the EUROPE shard. The SEA routing value serves the APAC shard (previously was ASIA and SEA).
 */
class Api extends BaseApi implements Contract
{
    /**
     * Get a list of match ids by PUUID.
     *
     * @see https://developer.riotgames.com/apis#lor-match-v1/GET_getMatchIdsByPUUID
     *
     * @return string[]
     */
    public function getMatchIdsByPUUID(string $puuid)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lor/match/v1/matches/by-puuid/{puuid}/ids',
            pathParams: [
                '{puuid}' => $puuid,
            ]
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get match by id.
     *
     * @see https://developer.riotgames.com/apis#lor-match-v1/GET_getMatch
     *
     * @return MatchDto
     */
    public function getMatch(string $matchId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lor/match/v1/matches/{matchId}',
            pathParams: [
                '{matchId}' => $matchId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: MatchDto::class);
    }
}
