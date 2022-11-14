<?php

namespace Rift\RiotApi\Apis\LorStatus\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LorStatus\V1\Contents\PlatformDataDto;
use Rift\RiotApi\RequestData;

/**
 * The AMERICAS routing value serves the AMERICAS shard. The EUROPE routing value serves the EUROPE shard. The SEA routing value serves the APAC shard (previously was ASIA and SEA).
 */
class Api extends BaseApi implements Contract
{
    /**
     * Get Legends of Runeterra status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#lor-status-v1/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData()
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lor/status/v1/platform-data',
        );

        return $this->client->request(requestData: $requestData, output: PlatformDataDto::class);
    }
}
