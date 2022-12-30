<?php

namespace Rift\RiotApi\Apis\ValContent\V1;

use Rift\RiotApi\Abstracts\BaseApi;
use Rift\RiotApi\RequestData;

class Api extends BaseApi implements Contract
{
    /**
     * Get content optionally filtered by locale.
     *
     * @see https://developer.riotgames.com/apis#val-content-v1/GET_getContent
     *
     * @return ContentDto
     */
    public function getContent(string $locale = null)
    {
        $requestData = new RequestData(
            method: 'GET',
            path: '/val/content/v1/contents',
            queryParams: [
                'locale' => $locale
            ]
        );

        return $this->client->request(requestData: $requestData, output: ContentDto::class);
    }
}
