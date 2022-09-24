<?php

namespace Rift\RiotApi;

abstract class BaseApi
{
    public function __construct(
        protected ClientInterface $client
    )
    {

    }
}
