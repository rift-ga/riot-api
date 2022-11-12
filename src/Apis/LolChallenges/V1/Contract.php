<?php

namespace Rift\RiotApi\Apis\LolChallenges\V1;

use Rift\RiotApi\Apis\LolChallenges\V1\Contents\ApexPlayerInfoDto;
use Rift\RiotApi\Apis\LolChallenges\V1\Contents\ChallengeConfigInfoDto;
use Rift\RiotApi\Apis\LolChallenges\V1\Contents\PlayerInfoDto;
use Rift\RiotApi\Enums\Level;

interface Contract
{
    /**
     * List of all basic challenge configuration information (includes all translations for names and descriptions).
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getAllChallengeConfigs
     *
     * @return ChallengeConfigInfoDto[]
     */
    public function getAllChallengeConfigs();

    /**
     * Map of level to percentile of players who have achieved it.
     * Keys: ChallengeId -> Season -> Level -> percentile of players who achieved it.
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getAllChallengePercentiles
     *
     * @return array<int, array<int, array<int, int>>>
     */
    public function getAllChallengePercentiles();

    /**
     * Get challenge configuration (REST).
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengeConfigs
     *
     * @return ChallengeConfigInfoDto
     */
    public function getChallengeConfigs(int $challengeId);

    /**
     * Return top players for each level. Level must be MASTER, GRANDMASTER or CHALLENGER.
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengeLeaderboards
     *
     * @return ApexPlayerInfoDto[]
     */
    public function getChallengeLeaderboards(int $challengeId, Level $level, int $limit = null);

    /**
     * Map of level to percentile of players who have achieved it.
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengePercentiles
     *
     * @return array<int, int>
     */
    public function getChallengePercentiles(int $challengeId);

    /**
     * Returns player information with list of all progressed challenges (REST).
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getPlayerData
     *
     * @return PlayerInfoDto
     */
    public function getPlayerData(string $puuid);
}
