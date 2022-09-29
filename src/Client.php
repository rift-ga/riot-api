<?php

namespace Rift\RiotApi;

use GuzzleHttp\RequestOptions;

class Client implements ClientInterface
{
    private static array $options = [
        'apiKey' => null,
    ];

    private \GuzzleHttp\Client $client;

    private ?string $region = null;


    public static function initialize(array $options)
    {
        static::$options = array_merge(static::$options, $options);
    }

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
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

    public function request(RequestDataInterface $requestData, string $output = null)
    {
        if (is_null($this->region)) {
            throw new ClientException('No region selected.');
        }

        $uri = strtr("https://{region}.api.riotgames.com", ['{region}' => $this->region]);
        $path = strtr($requestData->getPath(), $requestData->getPathParams());

        $response = $this->client->request(
            method: $requestData->getMethod(),
            uri: $uri . $path,
            options: [
                RequestOptions::QUERY => $requestData->getQueryParams(),
            ],
        );
        $response = json_decode($response->getBody()->getContents(), true);

        return $output ? new $output(...$response) : $response;
    }
}
