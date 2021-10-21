<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Server extends AbstractRequest
{
    protected $path = 'server';

    public function __construct(string $server, array $headers)
    {
        $this->headers = $headers;
        parent::__construct($server);
    }

    public function getServerDetails()
    {
        try {
            $response = $this->client->request(
                'GET',
                $this->path,
                [
                    'headers' => $this->headers,
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

    public function getServerIpAddresses()
    {
        $path = $this->path . '/ips';
        try {
            $response = $this->client->request(
                'GET',
                $path,
                [
                    'headers' => $this->headers,
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
