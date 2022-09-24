<?php

namespace Rift\RiotApi;

interface ClientInterface
{
    public function send(RequestDataInterface $requestData, string $contentClass): ?ContentInterface;
}
