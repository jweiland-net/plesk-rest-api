<?php

namespace JWeiland\PleskRestApi\Client\Request;

use GuzzleHttp\Client;

abstract class AbstractRequest
{
    protected $client;

    protected $headers;

    protected $server;

    public function __construct(string $server)
    {
        $this->server = $server;
        $this->client = new Client([
            'base_uri' => 'https://' . $this->server . ':8443/api/v2/',
            'timeout' => 2.0,
            ]
        );
    }
}
