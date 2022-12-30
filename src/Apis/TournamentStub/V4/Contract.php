<?php

namespace Rift\RiotApi\Apis\TournamentStub\V4;

interface Contract
{
    /**
     * Create a mock tournament code for the given tournament.
     *
     * @see https://developer.riotgames.com/apis#tournament-stub-v4/POST_createTournamentCode
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
    );
}
