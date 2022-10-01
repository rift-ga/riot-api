<?php

namespace Rift\RiotApi\Apis\ChampionMastery\V4;

use Rift\RiotApi\Apis\ChampionMastery\V4\Contents\ChampionMasteryDto;

interface Contract
{
    /**
     * Get all champion mastery entries sorted by number of champion points descending.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getAllChampionMasteries
     *
     * @return ChampionMasteryDto[]
     */
    public function getAllChampionMasteries(string $encryptedSummonerId);

    /**
     * Get a champion mastery by player ID and champion ID.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMastery
     *
     * @return ChampionMasteryDto
     */
    public function getChampionMastery(string $encryptedSummonerId, string $championId);

    /**
     * Get specified number of top champion mastery entries sorted by number of champion points descending.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getTopChampionMasteries
     *
     * @return ChampionMasteryDto[]
     */
    public function getTopChampionMasteries(string $encryptedSummonerId, int $count = 3);

    /**
     * Get a player's total champion mastery score, which is the sum of individual champion mastery levels.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMasteryScore
     *
     * @return int
     */
    public function getChampionMasteryScore(string $encryptedSummonerId);
}
