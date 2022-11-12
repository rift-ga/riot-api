<?php

namespace Rift\RiotApi\Apis\LolChallenges\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LolChallenges\V1\Contents\ApexPlayerInfoDto;
use Rift\RiotApi\Apis\LolChallenges\V1\Contents\ChallengeConfigInfoDto;
use Rift\RiotApi\Apis\LolChallenges\V1\Contents\PlayerInfoDto;
use Rift\RiotApi\Enums\Level;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * List of all basic challenge configuration information (includes all translations for names and descriptions).
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getAllChallengeConfigs
     *
     * @return ChallengeConfigInfoDto[]
     */
    public function getAllChallengeConfigs()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/challenges/v1/challenges/config',
        );

        return $this->client->request(requestData: $requestData, output: ChallengeConfigInfoDto::class, arrayOutput: true);
    }

    /**
     * Map of level to percentile of players who have achieved it.
     * Keys: ChallengeId -> Season -> Level -> percentile of players who achieved it.
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getAllChallengePercentiles
     *
     * @return array<int, array<int, array<int, int>>>
     */
    public function getAllChallengePercentiles()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/challenges/v1/challenges/percentiles',
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Get challenge configuration (REST).
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengeConfigs
     *
     * @return ChallengeConfigInfoDto
     */
    public function getChallengeConfigs(int $challengeId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/challenges/v1/challenges/{challengeId}/config',
            pathParams: [
                '{challengeId}' => $challengeId,
            ],
        );

        return $this->client->request(requestData: $requestData, output: ChallengeConfigInfoDto::class);
    }

    /**
     * Return top players for each level. Level must be MASTER, GRANDMASTER or CHALLENGER.
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengeLeaderboards
     *
     * @return ApexPlayerInfoDto[]
     */
    public function getChallengeLeaderboards(int $challengeId, Level $level, int $limit = null)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/challenges/v1/challenges/{challengeId}/leaderboards/by-level/{level}',
            pathParams: [
                '{challengeId}' => $challengeId,
                '{level}' => $level->name,
            ],
            queryParams: [
                'limit' => $limit
            ],
        );

        return $this->client->request(requestData: $requestData, output: ApexPlayerInfoDto::class, arrayOutput: true);
    }

    /**
     * Map of level to percentile of players who have achieved it.
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getChallengePercentiles
     *
     * @return array<int, int>
     */
    public function getChallengePercentiles(int $challengeId)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/challenges/v1/challenges/{challengeId}/percentiles',
            pathParams: [
                '{challengeId}' => $challengeId,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Returns player information with list of all progressed challenges (REST).
     *
     * @see https://developer.riotgames.com/apis#lol-challenges-v1/GET_getPlayerData
     *
     * @return PlayerInfoDto
     */
    public function getPlayerData(string $puuid)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/challenges/v1/player-data/{puuid}',
            pathParams: [
                '{puuid}' => $puuid,
            ],
        );

        return $this->client->request(requestData: $requestData, output: PlayerInfoDto::class);
    }
}
