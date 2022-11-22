<?php

namespace Rift\RiotApi\Apis\TftMatch\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\TftMatch\V1\Contents\MatchDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get a list of match ids by PUUID.
     *
     * @see https://developer.riotgames.com/apis#tft-match-v1/GET_getMatchIdsByPUUID
     *
     * @return string[]
     */
    public function getMatchIdsByPUUID(string $puuid, int $start = 0, int $startTime = null, int $endTime = null, int $count = 20)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/match/v1/matches/by-puuid/{puuid}/ids',
            pathParams: [
                '{puuid}' => $puuid
            ],
            queryParams: [
                'start' => $start,
                'endTime' => $endTime,
                'startTime' => $startTime,
                'count' => $count,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get a match by match id.
     *
     * @see https://developer.riotgames.com/apis#tft-match-v1/GET_getMatch
     *
     * @return MatchDto
     */
    public function getMatch(string $matchId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/match/v1/matches/{matchId}',
            pathParams: [
                '{matchId}' => $matchId
            ]
        );

        return $this->client->request(requestData: $requestData, output: MatchDto::class);
    }
}
