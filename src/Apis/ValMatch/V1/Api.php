<?php

namespace Rift\RiotApi\Apis\ValMatch\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\ValMatch\V1\Contents\MatchDto;
use Rift\RiotApi\Apis\ValMatch\V1\Contents\MatchListDto;
use Rift\RiotApi\Apis\ValMatch\V1\Contents\RecentMatchesDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get match by id.
     *
     * @see https://developer.riotgames.com/apis#val-match-v1/GET_getMatch
     *
     * @return MatchDto
     */
    public function getMatch(string $matchId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/val/match/v1/matches/{matchId}',
            pathParams: [
                '{matchId}' => $matchId,
            ],
        );

        return $this->client->request(requestData: $requestData, output: MatchDto::class);
    }

    /**
     * Get matchlist for games played by puuid.
     *
     * @see https://developer.riotgames.com/apis#val-match-v1/GET_getMatchlist
     *
     * @return MatchlistDto
     */
    public function getMatchlist(string $puuid)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/val/match/v1/matchlists/by-puuid/{puuid}',
            pathParams: [
                '{puuid}' => $puuid,
            ],
        );

        return $this->client->request(requestData: $requestData, output: MatchlistDto::class);
    }

    /**
     * Get recent matches.
     * Returns a list of match ids that have completed in the last 10 minutes for live regions and 12 hours for the esports routing value.
     * NA/LATAM/BR share a match history deployment. As such, recent matches will return a combined list of matches from those three regions.
     * Requests are load balanced so you may see some inconsistencies as matches are added/removed from the list.
     *
     * @see https://developer.riotgames.com/apis#val-match-v1/GET_getRecent
     *
     * @return RecentMatchesDto
     */
    public function getRecent(string $queue)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/val/match/v1/recent-matches/by-queue/{queue}',
            pathParams: [
                '{queue}' => $queue,
            ],
        );

        return $this->client->request(requestData: $requestData, output: RecentMatchesDto::class);
    }
}
