<?php

namespace Rift\RiotApi\ChampionMastery\V4;

use Rift\RiotApi\ChampionMastery\V4\Contents\ChampionMasteryDTO;

interface Contract
{
    /**
     * Get all champion mastery entries sorted by number of champion points descending,
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getAllChampionMasteries
     * @return ChampionMasteryDTO[]
     */
    public function getAllChampionMasteries(string $encryptedSummonerId);

    /**
     * Get a champion mastery by player ID and champion ID.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMastery
     * @return ChampionMasteryDTO
     */
    public function getChampionMastery(string $encryptedSummonerId, string $championId);

    /**
     * Get specified number of top champion mastery entries sorted by number of champion points descending.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getTopChampionMasteries
     * @return ChampionMasteryDTO[]
     */
    public function getTopChampionMasteries(string $encryptedSummonerId, int $count = 3);

    /**
     * Get a player's total champion mastery score, which is the sum of individual champion mastery levels.
     *
     * @see https://developer.riotgames.com/apis#champion-mastery-v4/GET_getChampionMasteryScore
     * @return int
     */
    public function getChampionMasteryScore(string $encryptedSummonerId);
}
