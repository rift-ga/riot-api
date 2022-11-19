<?php

namespace Rift\RiotApi\Apis\TftLeague\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\TftLeague\V1\Contents\LeagueEntryDto;
use Rift\RiotApi\Apis\TftLeague\V1\Contents\LeagueListDto;
use Rift\RiotApi\Apis\TftLeague\V1\Contents\TopRatedLadderEntryDto;
use Rift\RiotApi\Enums\Division;
use Rift\RiotApi\Enums\Queue;
use Rift\RiotApi\Enums\Tier;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get the challenger league.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getChallengerLeague
     *
     * @return LeagueListDTO
     */
    public function getChallengerLeague()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/challenger',
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDTO::class);
    }

    /**
     * Get league entries for a given summoner ID.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getLeagueEntriesForSummoner
     *
     * @return LeagueEntryDTO[]
     */
    public function getLeagueEntriesForSummoner(string $summonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/entries/by-summoner/{summonerId}',
            pathParams: [
                '{summonerId}' => $summonerId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: LeagueEntryDTO::class, arrayOutput: true);
    }

    /**
     * Get all the league entries.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getLeagueEntries
     *
     * @param Tier     $tier
     * @param Division $division
     * @param int      $page     Defaults to 1. Starts with page 1.
     *
     * @return LeagueEntryDTO[]
     */
    public function getLeagueEntries(Tier $tier, Division $division, int $page = 1)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/entries/{tier}/{division}',
            pathParams: [
                '{tier}' => $tier->name,
                '{division}' => $division->name,
            ]
        );

        return $this->client->request(requestData: $requestData, output: LeagueEntryDTO::class, arrayOutput: true);
    }

    /**
     * Get the grandmaster league.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getGrandmasterLeague
     *
     * @return LeagueListDTO
     */
    public function getGrandmasterLeague()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/grandmaster',
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDTO::class);
    }

    /**
     * Get league with given ID, including inactive entries.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getLeagueById
     *
     * @param string $leagueId The UUID of the league.
     *
     * @return LeagueListDTO
     */
    public function getLeagueById(string $leagueId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/leagues/{leagueId}',
            pathParams: [
                '{leagueId}' => $leagueId,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDTO::class);
    }

    /**
     * Get the master league.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getMasterLeague
     *
     * @return LeagueListDTO
     */
    public function getMasterLeague()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/master',
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDTO::class);
    }

    /**
     * Get the top rated ladder for given queue.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getTopRatedLadder
     *
     * @return TopRatedLadderEntryDto[]
     */
    public function getTopRatedLadder(Queue $queue)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/league/v1/rated-ladders/{queue}/top',
            pathParams: [
                '{queue}' => $queue->name,
            ],
        );

        return $this->client->request(requestData: $requestData, output: TopRatedLadderEntryDto::class, arrayOutput: true);
    }
}
