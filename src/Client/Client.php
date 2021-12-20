<?php

namespace JWeiland\PleskRestApi\Client;

use GuzzleHttp;
use JWeiland\PleskRestApi\Client\Request\RequestInterface;

require_once __DIR__ . '/../../vendor/autoload.php';

class Client
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $guzzleClient;

    /**
     * @var string
     */
    private $pleskServerUrl;

    /**
     * @var string
     */
    private $pleskUsername;

    /**
     * @var string
     */
    private $pleskPassword;

    /**
     * Client constructor.
     *
     * @param string $pleskServerUrl
     * @param int $pleskPort
     * @param string $username
     * @param string $password
     */
    public function __construct(string $pleskServerUrl, string $username, string $password, int $pleskPort = 8443)
    {
        $this->pleskServerUrl = $pleskServerUrl;
        $this->pleskUsername = $username;
        $this->pleskPassword = $password;

        $this->guzzleClient = new GuzzleHttp\Client([
            'base_uri' => $pleskServerUrl . ':' . $pleskPort . '/api/v2/',
            'timeout' => 16.0,
        ]);
    }

    /**
     * @param RequestInterface $request
     * @return array|mixed|string
     */
    public function execute(RequestInterface $request)
    {
        try {
            $result = [];
            $response = $this->guzzleClient->request(
                $request->getMethod(),
                $request->getPath(),
                [
                    'auth' => [
                        $this->pleskUsername,
                        $this->pleskPassword
                    ],
                    'body' => $request->getBody()
                ]
            );
            if ($response->getBody())
            {
                $result = json_decode($response->getBody()->getContents(), true);
            }
            return $result;
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            $result = sprintf(
                'Status code: %d - %s - %d -%s!',
                $e->getCode(),
                $e->getMessage(),
                $e->getLine(),
                $e->getFile()
            );
            return $result;
        }

    }
}
