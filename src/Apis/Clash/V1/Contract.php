<?php

namespace Rift\RiotApi\Apis\Clash\V1;

use Rift\RiotApi\Apis\Clash\V1\Contents\PlayerDto;
use Rift\RiotApi\Apis\Clash\V1\Contents\TeamDto;
use Rift\RiotApi\Apis\Clash\V1\Contents\TournamentDto;

interface Contract
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
    public function getPlayersBySummoner(string $encryptedSummonerId);

    /**
     * Get team by ID.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTeamById
     *
     * @return TeamDto
     */
    public function getTeamById(string $teamId);

    /**
     * Get all active or upcoming tournaments.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTournaments
     *
     * @return TournamentDto[]
     */
    public function getTournaments();

    /**
     * Get tournament by team ID.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTournamentByTeam
     *
     * @return TournamentDto
     */
    public function getTournamentByTeam(string $teamId);

    /**
     * Get tournament by ID.
     *
     * @see https://developer.riotgames.com/apis#clash-v1/GET_getTournamentById
     *
     * @return TournamentDto
     */
    public function getTournamentById(int $tournamentId);
}
