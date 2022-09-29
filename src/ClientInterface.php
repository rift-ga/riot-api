<?php

namespace Rift\RiotApi;

interface ClientInterface
{
    public function setRegion(Region $region): static;

    public function request(RequestDataInterface $requestData, string $output = null);
}
