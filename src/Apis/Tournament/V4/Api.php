<?php

namespace Rift\RiotApi\Apis\Tournament\V4;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\Tournament\V4\Contents\LobbyEventDtoWrapper;
use Rift\RiotApi\Apis\Tournament\V4\Contents\TournamentCodeDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Create a tournament code for the given tournament.
     *
     * @see https://developer.riotgames.com/apis#tournament-v4/POST_createTournamentCode
     *
     * @param int $count The number of codes to create (max 1000)
     * @param int $tournamentId The tournament ID
     * @param string[] $allowedSummonerIds Optional list of encrypted summonerIds in order to validate the players eligible to join the lobby. NOTE: We currently do not enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to enforce at the team level in the future.
     * @param string $metadata Optional string that may contain any data in any format, if specified at all. Used to denote any custom information about the game.
     * @param int $teamSize The team size of the game. Valid values are 1-5.
     * @param string $pickType The pick type of the game. (Legal values: BLIND_PICK, DRAFT_MODE, ALL_RANDOM, TOURNAMENT_DRAFT)
     * @param string $mapType The map type of the game. (Legal values: SUMMONERS_RIFT, TWISTED_TREELINE, HOWLING_ABYSS)
     * @param string $spectatorType The spectator type of the game. (Legal values: NONE, LOBBYONLY, ALL)
     *
     * @return string[]
     */
    public function createTournamentCode(
        int $count,
        int $tournamentId,
        array $allowedSummonerIds,
        string $metadata,
        int $teamSize,
        string $pickType,
        string $mapType,
        string $spectatorType,
    )
    {
        $requestData = new RequestData(
            method: 'POST',
            path: '/lol/tournament/v4/codes',
            queryParams: [
                'tournamentId' => $tournamentId,
                'count' => $count,
            ],
            bodyParams: [
                'allowedSummonerIds' => $allowedSummonerIds,
                'metadata' => $metadata,
                'teamSize' => $teamSize,
                'pickType' => $pickType,
                'mapType' => $mapType,
                'spectatorType' => $spectatorType,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Returns the tournament code DTO associated with a tournament code string.
     *
     * @see https://developer.riotgames.com/apis#tournament-v4/GET_getTournamentCode
     *
     * @param string $tournamentCode The tournament code string.
     *
     * @return TournamentCodeDto
     */
    public function getTournamentCode(string $tournamentCode)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/tournament/v4/codes/{tournamentCode}',
            pathParams: [
                'tournamentCode' => $tournamentCode,
            ],
        );

        return $this->client->request(requestData: $requestData, output: TournamentCodeDto::class);
    }

    /**
     * Update the pick type, map, spectator type, or allowed summoners for a code.
     *
     * @see https://developer.riotgames.com/apis#tournament-v4/PUT_updateCode
     *
     * @param string $tournamentCode The tournament code to update
     * @param string[] $allowedSummonerIds Optional list of encrypted summonerIds in order to validate the players eligible to join the lobby. NOTE: We currently do not enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to enforce at the team level in the future.
     * @param string $pickType The pick type (Legal values: BLIND_PICK, DRAFT_MODE, ALL_RANDOM, TOURNAMENT_DRAFT)
     * @param string $mapType The map type (Legal values: SUMMONERS_RIFT, TWISTED_TREELINE, HOWLING_ABYSS)
     * @param string $spectatorType The spectator type (Legal values: NONE, LOBBYONLY, ALL)
     *
     * @return void
     */
    public function updateCode(
        string $tournamentCode,
        array $allowedSummonerIds,
        string $pickType,
        string $mapType,
        string $spectatorType,
    )
    {
        $requestData = new RequestData(
            method: 'PUT',
            path: '/lol/tournament/v4/codes/{tournamentCode}',
            pathParams: [
                'tournamentCode' => $tournamentCode,
            ],
            bodyParams: [
                'allowedSummonerIds' => $allowedSummonerIds,
                'pickType' => $pickType,
                'mapType' => $mapType,
                'spectatorType' => $spectatorType,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Gets a list of lobby events by tournament code.
     *
     * @see https://developer.riotgames.com/apis#tournament-v4/GET_getLobbyEventsByCode
     *
     * @param string $tournamentCode The short code to look up lobby events for
     *
     * @return LobbyEventDtoWrapper
     */
    public function getLobbyEventsByCode(string $tournamentCode)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/tournament/v4/lobby-events/by-code/{tournamentCode}',
            pathParams: [
                'tournamentCode' => $tournamentCode,
            ],
        );

        return $this->client->request(requestData: $requestData, output: LobbyEventDtoWrapper::class);
    }

    /**
     * Creates a tournament provider and returns its ID.
     * Providers will need to call this endpoint first to register their callback URL and their API key with the tournament system before any other tournament provider endpoints will work.
     *
     * @see https://developer.riotgames.com/apis#tournament-v4/POST_registerProviderData
     *
     * @param string $region The region in which the provider will be running tournaments. (Legal values: BR, EUNE, EUW, JP, LAN, LAS, NA, OCE, PBE, RU, TR)
     * @param string $url The provider's callback URL to which tournament game results in this region should be posted. The URL must be well-formed, use the http or https protocol, and use the default port for the protocol (http URLs must use port 80, https URLs must use port 443).
     *
     * @return int
     */
    public function registerProviderData(string $region, string $url)
    {
        $requestData = new RequestData(
            method: 'POST',
            path: '/lol/tournament/v4/providers',
            bodyParams: [
                'region' => $region,
                'url' => $url,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }

    /**
     * Creates a tournament and returns its ID.
     *
     * @see https://developer.riotgames.com/apis#tournament-v4/POST_registerTournament
     *
     * @param int $providerId The provider ID to specify the regional registered provider data to associate this tournament.
     * @param string $name The optional name of the tournament.
     *
     * @return int
     */
    public function registerTournament(int $providerId, string $name)
    {
        $requestData = new RequestData(
            method: 'POST',
            path: '/lol/tournament/v4/tournaments',
            bodyParams: [
                'providerId' => $providerId,
                'name' => $name,
            ],
        );

        return $this->client->request(requestData: $requestData);
    }
}
