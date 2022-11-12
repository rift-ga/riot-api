<?php

namespace Rift\RiotApi\Apis\LolStatus\V4;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LolStatus\V4\Contents\PlatformDataDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get League of Legends status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/status/v4/platform-data',
        );

        return $this->client->request(requestData: $requestData, output: PlatformDataDto::class);
    }
}
