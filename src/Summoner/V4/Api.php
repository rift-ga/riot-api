<?php

namespace Rift\RiotApi\Summoner\V4;

use Rift\RiotApi\Summoner\V4\Contents\SummonerDTO;
use Rift\RiotApi\BaseApi;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    public function getSummonerByAccountId(string $encryptedAccountId): ?SummonerDTO
    {
        return $this->client->send(new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/by-account/{encryptedAccountId}',
            pathParams: [
                '{encryptedAccountId}' => $encryptedAccountId
            ]
        ), SummonerDTO::class);
    }

    public function getSummonerBySummonerName(string $summonerName): ?SummonerDTO
    {
        return $this->client->send(new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/by-name/{summonerName}',
            pathParams: [
                '{summonerName}' => $summonerName
            ]
        ), SummonerDTO::class);
    }

    public function getSummonerByPUUID(string $encryptedPUUID): ?SummonerDTO
    {
        return $this->client->send(new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/by-puuid/{encryptedPUUID}',
            pathParams: [
                '{encryptedPUUID}' => $encryptedPUUID
            ]
        ), SummonerDTO::class);
    }

    public function getSummonerBySummonerId(string $encryptedSummonerId): ?SummonerDTO
    {
        return $this->client->send(new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/{encryptedSummonerId}',
            pathParams: [
                '{encryptedSummonerId}' => $encryptedSummonerId
            ]
        ), SummonerDTO::class);
    }

    public function getSummonerByAccessToken(string $accessToken): ?SummonerDTO
    {
        return $this->client->send(new RequestData(
            method: 'GET',
            path: '/lol/summoner/v4/summoners/me',
            headers: [
                'Authorization', $accessToken
            ]
        ), SummonerDTO::class);
    }
}
