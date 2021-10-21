<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Auth extends AbstractRequest
{
    protected $path = 'auth/keys';

    private $secretKey;

    public function __construct(string $server)
    {
        parent::__construct($server);
    }

    /**
     * Returns the secretKey
     *
     * @return  $secretKey
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * Sets the SecretKey
     *
     * @param  $secretKey
     *
     * @return void
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = ($secretKey);
        $this->headers['X-API-Key'] = $secretKey;
    }

    /**
     * Returns the headers
     *
     * @return  $headers
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Sets the headers
     *
     * @param  $headers
     *
     * @return void
     */
    public function setHeaders($headers)
    {
        $this->headers = ($headers);
    }

    private function requestSecretKey($username, $password) : string
    {
        try {
            $response = $this->client->request(
                'POST',
                $this->path,
                [
                    'auth' => [
                        $username,
                        $password
                    ],
                    'body' => '{}'
                ]
            );
            if ($response->getBody())
            {
                $result = json_decode($response->getBody()->getContents(), true);
                return $result['key'];
            }
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return 1;
        }
    }

    public function deleteSecretKey($secretKey) : string
    {
        try {
            $response = $this->client->request(
                'DELETE',
                $this->path . '/' . $secretKey
            );
            $this->setSecretKey(null);
            return $response;
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return $e;
        }
    }

    public function authorize($username, $password)
    {
        $secretKey = $this->requestSecretKey($username, $password);
        $this->setSecretKey($secretKey);
    }

}
