<?php

namespace Rift\RiotApi\Apis\LorStatus\V1;

use Rift\RiotApi\Apis\LorStatus\V1\Contents\PlatformDataDto;

interface Contract
{
    /**
     * Get Legends of Runeterra status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#lor-status-v1/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData();
}
