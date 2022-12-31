<?php

namespace Rift\RiotApi\Apis\ValStatus\V1;

use Rift\RiotApi\Apis\ValStatus\V1\Contents\PlatformDataDto;

interface Contract
{
    /**
     * Get VALORANT status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#val-status-v1/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData();
}
