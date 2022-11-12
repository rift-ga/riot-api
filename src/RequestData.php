<?php

namespace Rift\RiotApi;

use Rift\RiotApi\Interfaces\RequestDataInterface;

class RequestData implements RequestDataInterface
{
    public function __construct(
        private readonly string $method,
        private readonly string $path,
        private readonly array $pathParams = [],
        private readonly array $queryParams = [],
        private readonly array $bodyParams = [],
        private readonly array $headers = [],
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

    public function getBodyParams(): array
    {
        return $this->bodyParams;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function getBody(): ?string
    {
        return $this->getBodyParams() ? json_encode($this->getBodyParams()) : null;
    }
}
