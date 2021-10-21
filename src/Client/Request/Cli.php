<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Cli extends AbstractRequest
{
    protected $path = 'cli';

    public function __construct($headers)
    {
        $this->headers = $headers;
        parent::__construct();
    }

    public function executeCommand(string $utility, array $parameters)
    {
        $utilityPath = $this->path . '/' . $utility . '/call';

        try {
            $response = $this->client->request(
                'POST',
                $utilityPath,
                [
                    'headers' => $this->headers,
                    'body' => '{ "params": ' . json_encode($parameters) . '}',
                ]
            );
            if ($response->getBody()) {
                $result = $response->getBody()->getContents();
                return $result;
            }
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return $e;
        }
    }
}
