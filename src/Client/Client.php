<?php

namespace JWeiland\PleskRestApi\Client;

use GuzzleHttp;
use JWeiland\PleskRestApi\Client\Request\AbstractRequest;
use JWeiland\PleskRestApi\Client\Request\Cli\Subscription;

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
            'timeout' => 2.0,
        ]);
    }

    /**
     * @param $request
     * @return string
     */
    public function execute(AbstractRequest $request)
    {
        try {
            $result = false;
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
                'Status code: %s - %d!',
                $e->getCode(),
                $e->getMessage()
            );
            return $result;
        }

    }
}
