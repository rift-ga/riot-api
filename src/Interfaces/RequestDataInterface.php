<?php

namespace Rift\RiotApi\Interfaces;

interface RequestDataInterface
{
    public function getMethod(): string;

    public function getPath(): string;

    public function getPathParams(): array;

    public function getQueryParams(): array;

    public function getHeaders(): array;
}
