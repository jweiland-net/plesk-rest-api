<?php

namespace JWeiland\PleskRestApi\Client\Request\Clients;

use JWeiland\PleskRestApi\Client\Request\AbstractRequest;

class CreateNewClient extends AbstractRequest
{
    protected $path = 'clients';

    protected $method = 'POST';

    /**
     * @param array $parameters
     * Required Values: name, login, status, email, password, type
     * Optional Values: company, locale, owner_login, external_id, description
     */
    public function setRequestBody(array $parameters)
    {
        $this->body = json_encode($parameters);
    }

}
