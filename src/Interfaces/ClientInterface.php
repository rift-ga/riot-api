<?php

namespace Rift\RiotApi\Interfaces;

use Rift\RiotApi\Enums\Region;

interface ClientInterface
{
    public function setRegion(Region $region): static;

    public function request(RequestDataInterface $requestData, string $output = null);
}
