<?php

namespace JWeiland\PleskRestApi\Client\Request;

class DbUsers extends AbstractRequest
{
    protected $path = 'dbusers';

    protected $bodyAllowed = true;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'login',
        'password',
        'server_id',
        'database_id',
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
        'PUT',
        'DELETE'
    ];
}
