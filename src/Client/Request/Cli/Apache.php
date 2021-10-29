<?php

namespace JWeiland\PleskRestApi\Client\Request\Cli;

use JWeiland\PleskRestApi\Client\Request\AbstractRequest;

class Apache extends AbstractRequest
{
    protected $path = 'cli/apache/call';

    protected $method = 'POST';

    public function setRequestBody(array $parameters)
    {
        $parameters = [
            'params' => $parameters
        ];
        $this->body = json_encode($parameters);
    }
}
