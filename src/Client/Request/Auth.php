<?php

namespace JWeiland\PleskRestApi\Client\Request;

class Auth extends AbstractRequest
{
    protected $path = 'auth/keys';

    /**
     * @var array
     */
    protected $allowedBodyParameters = [
        'POST' => [
            'ip',
            'ips',
            'login',
            'description'
        ],
        'DELETE' => [
        ]
    ];

    /**
     * @var array
     */
    protected $allowedMethods = [
        'POST',
        'DELETE'
    ];

    /**
     * @var array
     */
    protected $allowedParameters = [
        'DELETE' => [
            'key'
        ],
        'POST' => [
        ]
    ];











//    private function requestSecretKey($username, $password) : string
//    {
//        try {
//            $response = $this->client->request(
//                'POST',
//                $this->path,
//                [
//                    'auth' => [
//                        $username,
//                        $password
//                    ],
//                    'body' => '{}'
//                ]
//            );
//            if ($response->getBody())
//            {
//                $result = json_decode($response->getBody()->getContents(), true);
//                return $result['key'];
//            }
//        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
//            return 1;
//        }
//    }
//
//    public function deleteSecretKey($secretKey) : string
//    {
//        try {
//            $response = $this->client->request(
//                'DELETE',
//                $this->path . '/' . $secretKey
//            );
//            $this->setSecretKey(null);
//            return $response;
//        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
//            return $e;
//        }
//    }
//
//    public function authorize($username, $password)
//    {
//        $secretKey = $this->requestSecretKey($username, $password);
//        $this->setSecretKey($secretKey);
//    }

}
