<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Dns extends AbstractRequest
{
    protected $path = 'dns';

    protected $bodyAllowed = true;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'domain',
        'id',
        'type',
        'host',
        'opt',
        'ttl'
    ];

    /**
     * @var array
     */
    protected $allowedMethods = [
        'GET',
        'PUT'
    ];
}
