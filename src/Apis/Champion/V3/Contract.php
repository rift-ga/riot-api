<?php

namespace Rift\RiotApi\Apis\Champion\V3;

use Rift\RiotApi\Apis\Champion\V3\Contents\ChampionInfo;

interface Contract
{
    /**
     * Returns champion rotations, including free-to-play and low-level free-to-play rotations.
     *
     * @see https://developer.riotgames.com/apis#champion-v3/GET_getChampionInfo
     *
     * @return ChampionInfo
     */
    public function getChampionInfo();
}
