<?php

namespace Rift\RiotApi\Apis\League\V4;

use Rift\RiotApi\Apis\League\V4\Contents\LeagueEntryDto;
use Rift\RiotApi\Apis\League\V4\Contents\LeagueListDto;
use Rift\RiotApi\Enums\Division;
use Rift\RiotApi\Enums\Queue;
use Rift\RiotApi\Enums\Tier;

interface Contract
{
    /**
     * Get the challenger league for given queue.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getChallengerLeague
     *
     * @return LeagueListDTO
     */
    public function getChallengerLeague(Queue $queue);

    /**
     * Get league entries in all queues for a given summoner ID.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntriesForSummoner
     *
     * @return LeagueEntryDto[]
     */
    public function getLeagueEntriesForSummoner(string $encryptedSummonerId);

    /**
     * Get all the league entries.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueEntries
     *
     * @return LeagueEntryDto[]
     */
    public function getLeagueEntries(Queue $queue, Tier $tier, Division $division, int $page = 1);

    /**
     * Get the grandmaster league of a specific queue.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getGrandmasterLeague
     *
     * @return LeagueListDto
     */
    public function getGrandmasterLeague(Queue $queue);

    /**
     * Get league with given ID, including inactive entries.
     *
     * Consistently looking up league ids that don't exist will result in a blacklist.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getLeagueById
     *
     * @return LeagueListDto
     */
    public function getLeagueById(string $leagueId);

    /**
     * Get the master league for given queue.
     *
     * @see https://developer.riotgames.com/apis#league-v4/GET_getMasterLeague
     *
     * @return LeagueListDto
     */
    public function getMasterLeague(Queue $queue);
}
