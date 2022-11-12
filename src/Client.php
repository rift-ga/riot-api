<?php

namespace Rift\RiotApi;

use GuzzleHttp\RequestOptions;
use Rift\RiotApi\Enums\Region;
use Rift\RiotApi\Exceptions\ClientException;
use Rift\RiotApi\Interfaces\ClientInterface;
use Rift\RiotApi\Interfaces\ContentInterface;
use Rift\RiotApi\Interfaces\RequestDataInterface;

class Client implements ClientInterface
{
    private static array $options = [
        'apiKey' => null,
    ];

    private \GuzzleHttp\Client $httpClient;

    private ?string $region = null;

    public static function initialize(array $options)
    {
        static::$options = array_merge(static::$options, $options);
    }

    public function __construct()
    {
        $this->httpClient = new \GuzzleHttp\Client([
            'timeout' => 2.0,
            'headers' => [
                'X-Riot-Token' => static::$options['apiKey'],
            ],
        ]);
    }

    public function setRegion(Region $region): static
    {
        $this->region = $region->value;

        return $this;
    }

    public function request(RequestDataInterface $requestData, ContentInterface|string $output = null, bool $arrayOutput = false)
    {
        if (is_null($this->region)) {
            throw new ClientException('No region selected.');
        }

        $uri = strtr('https://{region}.api.riotgames.com', ['{region}' => $this->region]);
        $path = strtr($requestData->getPath(), $requestData->getPathParams());

        $response = $this->httpClient->request(
            method: $requestData->getMethod(),
            uri: $uri . $path,
            options: [
                RequestOptions::QUERY => $requestData->getQueryParams(),
            ],
        );
        $responseData = json_decode($response->getBody()->getContents(), true);

        return match (true) {
            is_null($output) => $responseData,
            $arrayOutput => array_map(fn($item) => $output::create(...$item), $responseData),
            default => $output::create(...$responseData),
        };
    }
}
