<?php

namespace Rift\RiotApi\Abstracts;

use Rift\RiotApi\Interfaces\ClientInterface;

abstract class BaseApi
{
    public function __construct(
        protected ClientInterface $client
    ) {
    }
}
