<?php

namespace Rift\RiotApi\Apis\LeagueExp\V4;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\Apis\LeagueExp\V4\Contents\LeagueEntryDto;
use Rift\RiotApi\Enums\Division;
use Rift\RiotApi\Enums\Queue;
use Rift\RiotApi\Enums\Tier;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get all the league entries.
     *
     * At the request of a GitHub issue, we've added an experimental league-exp-v4 endpoint. This new endpoint is a
     * duplicate of the endpoint in league-v4, but it also supports the apex tiers (Challenger, Grandmaster, and Master).
     * In November we'll evaluate whether this endpoint delivers enough value to merit its continual support.
     * @see https://developer.riotgames.com/apis#league-exp-v4/GET_getLeagueEntries
     *
     * @return LeagueEntryDTO[]
     */
    public function getLeagueEntries(Queue $queue, Tier $tier, Division $division, int $page = 1)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/lol/league-exp/v4/entries/{queue}/{tier}/{division}',
            pathParams: [
                '{queue}' => $queue->name,
                '{tier}' => $tier->name,
                '{division}' => $division->name,
            ],
            queryParams: [
                'page' => $page
            ]
        );

        return $this->client->request(requestData: $requestData);
    }
}
