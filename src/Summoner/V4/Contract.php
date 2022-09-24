<?php

namespace Rift\RiotApi\Summoner\V4;

use Rift\RiotApi\Summoner\V4\Contents\SummonerDTO;

interface Contract
{
    public function getSummonerByAccountId(string $encryptedAccountId): ?SummonerDTO;

    public function getSummonerBySummonerName(string $summonerName): ?SummonerDTO;

    public function getSummonerByPUUID(string $encryptedPUUID): ?SummonerDTO;

    public function getSummonerBySummonerId(string $encryptedSummonerId): ?SummonerDTO;

    public function getSummonerByAccessToken(string $accessToken): ?SummonerDTO;
}
