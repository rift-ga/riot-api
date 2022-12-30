<?php

namespace Rift\RiotApi\Apis\TftStatus\V1;

use Rift\RiotApi\Apis\TftStatus\V1\Contents\PlatformDataDto;

interface Contract
{
    /**
     * Get Teamfight Tactics status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#tft-status-v1/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData();
}
