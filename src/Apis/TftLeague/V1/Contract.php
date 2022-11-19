<?php

namespace Rift\RiotApi\Apis\TftLeague\V1;

use Rift\RiotApi\Apis\TftLeague\V1\Contents\LeagueEntryDto;
use Rift\RiotApi\Apis\TftLeague\V1\Contents\LeagueListDto;
use Rift\RiotApi\Apis\TftLeague\V1\Contents\TopRatedLadderEntryDto;
use Rift\RiotApi\Enums\Division;
use Rift\RiotApi\Enums\Queue;
use Rift\RiotApi\Enums\Tier;

interface Contract
{
    /**
     * Get the challenger league.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getChallengerLeague
     *
     * @return LeagueListDTO
     */
    public function getChallengerLeague();

    /**
     * Get league entries for a given summoner ID.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getLeagueEntriesForSummoner
     *
     * @return LeagueEntryDTO[]
     */
    public function getLeagueEntriesForSummoner(string $summonerId);

    /**
     * Get all the league entries.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getLeagueEntries
     *
     * @param Tier $tier
     * @param Division $division
     * @param int $page Defaults to 1. Starts with page 1.
     * @return LeagueEntryDTO[]
     */
    public function getLeagueEntries(Tier $tier, Division $division, int $page = 1);

    /**
     * Get the grandmaster league.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getGrandmasterLeague
     *
     * @return LeagueListDTO
     */
    public function getGrandmasterLeague();

    /**
     * Get league with given ID, including inactive entries.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getLeagueById
     *
     * @param string $leagueId The UUID of the league.
     * @return LeagueListDTO
     */
    public function getLeagueById(string $leagueId);

    /**
     * Get the master league.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getMasterLeague
     *
     * @return LeagueListDTO
     */
    public function getMasterLeague();

    /**
     * Get the top rated ladder for given queue.
     *
     * @see https://developer.riotgames.com/apis#tft-league-v1/GET_getTopRatedLadder
     *
     * @return TopRatedLadderEntryDto[]
     */
    public function getTopRatedLadder(Queue $queue);
}
