<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Databases extends AbstractRequest
{
    protected $path = 'databases';

    protected $bodyAllowed = true;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'server_id',
        'name',
        'type',
        'parent_domain' => [
            'id',
            'name',
            'guid'
        ]
    ];

    /**
     * @var array
     */
    protected $allowedMethods = [
        'GET',
        'POST',
        'DELETE'
    ];
}
