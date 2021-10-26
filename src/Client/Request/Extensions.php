<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Extensions extends AbstractRequest
{
    protected $path = 'extensions';

    protected $bodyAllowed = true;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'id',
        'url',
        'file'
    ];

    /**
     * @var array
     */
    protected $allowedMethods = [
        'GET',
        'PUT',
        'POST',
        'DELETE'
    ];
}
