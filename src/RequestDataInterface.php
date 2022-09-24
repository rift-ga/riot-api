<?php

namespace Rift\RiotApi;

interface RequestDataInterface
{
    public function getMethod(): string;

    public function getPath(): string;

    public function getPathParams(): array;

    public function getQueryParams(): array;

    public function getHeaders(): array;
}
