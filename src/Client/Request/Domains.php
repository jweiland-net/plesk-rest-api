<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Domains
{
    protected $path = 'domains';

    protected $bodyAllowed = true;

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'name',
        'description',
        'hosting_type',
        'hosting_settings' => [
            'ftp_login',
            'ftp_password'
        ],
        'base_domain' => [
            'id',
            'name',
            'guid'
        ],
        'parent_domain' => [
            'id',
            'name',
            'guid'
        ],
        'owner_client' => [
            'id',
            'login',
            'guid',
            'external_id'
        ],
        'ip_addresses' => [],
        'ipv4' => [],
        'ipv6' => [],
        'plan' => [
            'name'
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
