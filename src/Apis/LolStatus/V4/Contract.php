<?php

namespace Rift\RiotApi\Apis\LolStatus\V4;

use Rift\RiotApi\Apis\LolStatus\V4\Contents\PlatformDataDto;

interface Contract
{
    /**
     * Get League of Legends status for the given platform.
     *
     * @see https://developer.riotgames.com/apis#lol-status-v4/GET_getPlatformData
     *
     * @return PlatformDataDto
     */
    public function getPlatformData();
}
