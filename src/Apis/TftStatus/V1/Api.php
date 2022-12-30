<?php

namespace Rift\RiotApi\Apis\TftStatus\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\TftStatus\V1\Contents\PlatformDataDto;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get Teamfight Tactics status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#tft-status-v1/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/tft/status/v1/platform-data',
        );

        return $this->client->request(requestData: $requestData, output: PlatformDataDto::class);
    }
}
