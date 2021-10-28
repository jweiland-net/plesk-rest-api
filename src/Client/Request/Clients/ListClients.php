<?php

namespace JWeiland\PleskRestApi\Client\Request\Clients;

use JWeiland\PleskRestApi\Client\Request\AbstractRequest;

class ListClients extends AbstractRequest
{
    protected $path = 'clients';

    protected $method = 'GET';

}
