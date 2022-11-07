<?php

namespace Rift\RiotApi\Apis\LeagueExp\V4;

use Rift\RiotApi\Apis\LeagueExp\V4\Contents\LeagueEntryDto;
use Rift\RiotApi\Enums\Division;
use Rift\RiotApi\Enums\Queue;
use Rift\RiotApi\Enums\Tier;

interface Contract
{
    /**
     * Get all the league entries.
     *
     * @see https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
     *
     * @return LeagueEntryDTO[]
     */
    public function getLeagueEntries(Queue $queue, Tier $tier, Division $division);
}
