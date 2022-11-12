<?php

namespace Rift\RiotApi\Apis\LorInventory\V1;

use Rift\RiotApi\Apis\LorInventory\V1\Contents\CardDto;

interface Contract
{
    /**
     * Return a list of cards owned by the calling user.
     *
     * @see https://developer.riotgames.com/apis#lor-inventory-v1/GET_getCards
     *
     * @return CardDto[]
     */
    public function getCards();
}
