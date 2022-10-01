<?php

namespace Rift\RiotApi\Apis\Clash\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\Clash\V1\Contents\PlayerDto;
use Rift\RiotApi\Apis\Clash\V1\Contents\TeamDto;
use Rift\RiotApi\Apis\Clash\V1\Contents\TournamentDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get players by summoner ID.
     *
     * This endpoint returns a list of active Clash players for a given summoner ID.
     * If a summoner registers for multiple tournaments at the same time (e.g., Saturday and Sunday) then both
     * registrations would appear in this list.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getPlayersBySummoner
     *
     * @return PlayerDto[]
     */
    public function getPlayersBySummoner(string $summonerId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/clash/v1/players/by-summoner/{summonerId}',
            pathParams: [
                '{summonerId}' => $summonerId,
            ]
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get team by ID.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTeamById
     *
     * @return TeamDto
     */
    public function getTeamById(string $teamId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/clash/v1/teams/{teamId}',
            pathParams: [
                '{teamId}' => $teamId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: TeamDto::class);
    }

    /**
     * Get all active or upcoming tournaments.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTournaments
     *
     * @return TournamentDto[]
     */
    public function getTournaments()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/clash/v1/tournaments',
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get tournament by team ID.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTournamentByTeam
     *
     * @return TournamentDto
     */
    public function getTournamentByTeam(string $teamId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/clash/v1/tournaments/by-team/{teamId}',
            pathParams: [
                '{teamId}' => $teamId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: TournamentDto::class);
    }

    /**
     * Get tournament by ID.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTournamentById
     *
     * @return TournamentDto
     */
    public function getTournamentById(int $tournamentId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/clash/v1/tournaments/{tournamentId}',
            pathParams: [
                '{tournamentId}' => $tournamentId,
            ]
        );

        return $this->client->request(requestData: $requestData, output: TournamentDto::class);
    }
}
