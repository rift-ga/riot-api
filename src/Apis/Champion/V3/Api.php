<?php

namespace Rift\RiotApi\Apis\Champion\V3;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\Champion\V3\Contents\ChampionInfo;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Returns champion rotations, including free-to-play and low-level free-to-play rotations.
     *
     * @see https://developer.riotgames.com/apis#champion-v3/GET_getChampionInfo
     *
     * @return ChampionInfo
     */
    public function getChampionInfo()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/platform/v3/champion-rotations',
        );

        return $this->client->request(requestData: $requestData, output: ChampionInfo::class);
    }
}
