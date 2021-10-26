<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Ftpusers extends AbstractRequest
{
    protected $path = 'ftpusers';

    protected $bodyAllowed = true;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'name',
        'password',
        'home',
        'quota',
        'permissions' => [
            'read',
            'write'
        ],
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
        'POST',
        'GET',
        'PUT',
        'DELETE'
    ];
}
