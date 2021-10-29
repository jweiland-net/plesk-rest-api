<?php

namespace JWeiland\PleskRestApi\Client\Request\Cli;

use JWeiland\PleskRestApi\Client\Request\AbstractRequest;

class Nginx extends AbstractRequest
{
    protected $path = 'cli/nginx/call';

    protected $method = 'POST';

    public function setRequestBody(array $parameters)
    {
        $parameters = [
            'params' => $parameters
        ];
        $this->body = json_encode($parameters);
    }
}
