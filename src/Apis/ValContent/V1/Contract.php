<?php

namespace Rift\RiotApi\Apis\ValContent\V1;

use Rift\RiotApi\Apis\ValContent\V1\Contents\ContentDto;

interface Contract
{
    /**
     * Get content optionally filtered by locale.
     *
     * @see https://developer.riotgames.com/apis#val-content-v1/GET_getContent
     *
     * @return ContentDto
     */
    public function getContent(string $locale = null);
}
