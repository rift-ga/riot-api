<?php

namespace Rift\RiotApi\Apis\TournamentStub\V4;

use Rift\RiotApi\Apis\TournamentStub\V4\Contents\LobbyEventDtoWrapper;

interface Contract
{
    /**
     * Create a mock tournament code for the given tournament.
     *
     * @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_createTournamentCode
     *
     * @param int      $count              The number of codes to create (max 1000)
     * @param int      $tournamentId       The tournament ID
     * @param string[] $allowedSummonerIds Optional list of encrypted summonerIds in order to validate the players eligible to join the lobby. NOTE: We currently do not enforce participants at the team level, but rather the aggregate of teamOne and teamTwo. We may add the ability to enforce at the team level in the future.
     * @param string   $metadata           Optional string that may contain any data in any format, if specified at all. Used to denote any custom information about the game.
     * @param int      $teamSize           The team size of the game. Valid values are 1-5.
     * @param string   $pickType           The pick type of the game. (Legal values: BLIND_PICK, DRAFT_MODE, ALL_RANDOM, TOURNAMENT_DRAFT)
     * @param string   $mapType            The map type of the game. (Legal values: SUMMONERS_RIFT, TWISTED_TREELINE, HOWLING_ABYSS)
     * @param string   $spectatorType      The spectator type of the game. (Legal values: NONE, LOBBYONLY, ALL)
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
    );

    /**
     * Gets a mock list of lobby events by tournament code.
     *
     * @see https://developer.riotgames.com/apis#tournament-stub-v4/GET_getLobbyEventsByCode
     *
     * @return LobbyEventDtoWrapper
     */
    public function getLobbyEventsByCode(string $tournamentCode);

    /**
     * Creates a mock tournament provider and returns its ID.
     *
     * @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_registerProviderData
     *
     * @param string $region The region in which the provider will be running tournaments. (Legal values: BR, EUNE, EUW, JP, LAN, LAS, NA, OCE, PBE, RU, TR)
     * @param string $url    The provider's callback URL to which tournament game results in this region should be posted. The URL must be well-formed, use the http or https protocol, and use the default port for the protocol (http URLs must use port 80, https URLs must use port 443).
     *
     * @return int
     */
    public function registerProviderData(string $region, string $url);

    /**
     * Creates a mock tournament and returns its ID.
     *
     * @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_registerTournament
     *
     * @param int    $providerId The provider ID to specify the regional registered provider data to associate this tournament.
     * @param string $name       The optional name of the tournament.
     *
     * @return int
     */
    public function registerTournament(int $providerId, string $name);
}
