<?php

namespace Rift\RiotApi\Apis\League\V4;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\League\V4\Contents\LeagueEntryDto;
use Rift\RiotApi\Apis\League\V4\Contents\LeagueListDto;
use Rift\RiotApi\Enums\Division;
use Rift\RiotApi\Enums\Queue;
use Rift\RiotApi\Enums\Tier;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get the challenger league for given queue.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
     *
     * @return LeagueListDTO
     */
    public function getChallengerLeague(Queue $queue)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league/v4/challengerleagues/by-queue/{queue}',
            pathParams: [
                '{queue}' => $queue->name,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDTO::class);
    }

    /**
     * Get league entries in all queues for a given summoner ID.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntriesForSummoner
     *
     * @return LeagueEntryDto[]
     */
    public function getLeagueEntriesForSummoner(string $encryptedSummonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league/v4/entries/by-summoner/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueEntryDto::class, arrayOutput: true);
    }

    /**
     * Get all the league entries.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntries
     *
     * @return LeagueEntryDto[]
     */
    public function getLeagueEntries(Queue $queue, Tier $tier, Division $division, int $page = 1)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league/v4/entries/{queue}/{tier}/{division}',
            pathParams: [
                '{queue}' => $queue->name,
                '{tier}' => $tier->name,
                '{division}' => $division->name,
            ],
            queryParams: [
                'page' => $page
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueEntryDto::class, arrayOutput: true);
    }

    /**
     * Get the grandmaster league of a specific queue.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
     *
     * @return LeagueListDto
     */
    public function getGrandmasterLeague(Queue $queue)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league/v4/grandmasterleagues/by-queue/{queue}',
            pathParams: [
                '{queue}' => $queue->name,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDto::class);
    }

    /**
     * Get league with given ID, including inactive entries.
     *
     * Consistently looking up league ids that don't exist will result in a blacklist.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
     *
     * @return LeagueListDto
     */
    public function getLeagueById(string $leagueId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league/v4/leagues/{leagueId}',
            pathParams: [
                '{leagueId}' => $leagueId,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDto::class);
    }

    /**
     * Get the master league for given queue.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
     *
     * @return LeagueListDto
     */
    public function getMasterLeague(Queue $queue)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league/v4/masterleagues/by-queue/{queue}',
            pathParams: [
                '{queue}' => $queue->name,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LeagueListDto::class);
    }
}
