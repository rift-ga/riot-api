<?php

namespace Rift\RiotApi;

class RequestData implements RequestDataInterface
{
    public function __construct(
        private string $method,
        private string $path,
        private array $pathParams = [],
        private array $queryParams = [],
        private array $headers = [],
    ) {
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getPathParams(): array
    {
        return $this->pathParams;
    }

    public function getQueryParams(): array
    {
        return $this->queryParams;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}
