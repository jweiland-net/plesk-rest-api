<?php

namespace JWeiland\PleskRestApi\Client\Request\Cli;

use JWeiland\PleskRestApi\Client\Request\AbstractRequest;

class Subscription extends AbstractRequest
{
    protected $path = 'cli/subscription/call';

    protected $method = 'POST';

    public function setRequestBody(array $parameters)
    {
        $this->body = '{ "params": ' . json_encode($parameters) . '}';
    }
}
