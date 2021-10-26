<?php

require_once __DIR__ . '../../vendor/autoload.php';

class Client
{
    /**
     * @var string
     */
    private $secretKey;

    private $guzzleClient;

    /**
     * Client constructor.
     *
     * @param string $pleskServer
     * @param string $username
     * @param string $password
     */
    public function __construct(string $pleskServer, string $username, string $password)
    {
        $this->auth($username, $password);
    }

    public function __destruct()
    {
        $this->unAuth($this->secretKey);
    }

    /**
     * @param string $username
     * @param string $password
     */
    protected function auth(string $username, string $password)
    {
        $authResult = $this->execute('');
        if ($authResult->getBody())
        {
            $result = json_decode($authResult->getBody()->getContents(), true);
        }
        $this->secretKey = $authResult['key'];
    }

    /**
     * @param string $secretKey
     */
    protected function unAuth(string $secretKey)
    {

    }

    public function buildRequest()
    {
        $request = [
            ''
        ];
    }

    /**
     * @param $request
     * @return string
     */
    public function execute($request): string
    {
        $response = $this->guzzleClient->request($request);
        return $response;
    }
}
