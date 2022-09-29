<?php

namespace Rift\RiotApi;

use GuzzleHttp\RequestOptions;

class Client implements ClientInterface
{
    private static array $options = [
        'apiKey' => null,
        'url' => 'https://eun1.api.riotgames.com',
    ];

    private \GuzzleHttp\Client $client;

    public static function initialize(array $options)
    {
        static::$options = array_merge(static::$options, $options);
    }

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => static::$options['url'],
            'timeout' => 2.0,
            'headers' => [
                'X-Riot-Token' => static::$options['apiKey'],
            ],
        ]);
    }

    public function request(RequestDataInterface $requestData, string $output = null)
    {
        $response = $this->client->request(
            method: $requestData->getMethod(),
            uri: strtr($requestData->getPath(), $requestData->getPathParams()),
            options: [
                RequestOptions::QUERY => $requestData->getQueryParams(),
            ],
        );
        $response = json_decode($response->getBody()->getContents(), true);

        return $output ? new $output(...$response) : $response;
    }
}
