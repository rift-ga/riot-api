<?php

namespace Rift\RiotApi;

interface ClientInterface
{
    public function request(RequestDataInterface $requestData, string $output = null);
}
