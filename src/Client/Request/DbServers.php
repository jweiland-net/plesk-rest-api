<?php

namespace JWeiland\PleskRestApi\Client\Request;

class DbServers extends AbstractRequest
{
    protected $path = 'dbservers';

    protected $bodyAllowed = false;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
    ];

    /**
     * @var array
     */
    protected $allowedMethods = [
        'GET'
    ];
}

