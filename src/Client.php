<?php

namespace Rift\RiotApi;

class Client implements ClientInterface
{
    private static array $options = [
        'apiKey' => null,
        'url' => 'https://eun1.api.riotgames.com'
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
                'X-Riot-Token' => static::$options['apiKey']
            ]
        ]);
    }

    public function send(RequestDataInterface $requestData, string $contentClass): ?ContentInterface
    {
        try {
            $response = $this->client->request(
                $requestData->getMethod(),
                strtr(
                    $requestData->getPath(),
                    $requestData->getPathParams()
                )
            );
            $response = json_decode($response->getBody()->getContents(), true);

            return new $contentClass(...$response);
        } catch (\Exception $e) {
            return null;
        }
    }
}