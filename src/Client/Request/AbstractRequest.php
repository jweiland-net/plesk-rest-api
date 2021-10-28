<?php

namespace JWeiland\PleskRestApi\Client\Request;

abstract class AbstractRequest implements RequestInterface
{
    // VARIABLE DECELERATION

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $body;

    // Functions

    public function getMethod()
    {
        return $this->method;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getBody()
    {
        return $this->body;
    }


//    /**
//     * @var string
//     */
//    protected $client;
//
//    /**
//     * @var array
//     */
//    protected $headers;
//
//    /**
//     * @var string
//     */
//    protected $server;
//
//    /**
//     * @var array
//     */
//    protected $body;
//
//    /**
//     * @var string
//     */
//    protected $method;
//
//    /**
//     * @var array
//     */
//    protected $parameters = [];

//    // API PATH
//
//    /**
//     * Returns the path
//     *
//     * @return string
//     */
//    public function getPath(): string
//    {
//        return $this->path;
//    }
//
//    /**
//     * Sets the path
//     *
//     * @param  $path
//     *
//     * @return void
//     */
//    public function setPath(string $path)
//    {
//        $this->path = trim($path);
//    }

//    // SERVER
//
//    /**
//     * Returns the server
//     *
//     * @return string
//     */
//    public function getServer()
//    {
//        return $this->server;
//    }
//
//    /**
//     * Sets the server
//     *
//     * @param  $server
//     *
//     * @return void
//     */
//    public function setServer($server)
//    {
//        $this->server = ($server);
//    }
//
//    // REQUEST BODY
//
//    /**
//     * Returns the body
//     *
//     * @return array
//     */
//    public function getBodyParameters()
//    {
//        return $this->body;
//    }
//
//    /**
//     * Adds a parameter to the body
//     * @param string $parameter
//     * @param $value
//     */
//    public function addBodyParameter(string $parameter, $value)
//    {
//        if (array_key_exists($parameter, $this->allowedBodyParameters))
//        {
//            $this->body[$parameter] = $value;
//        }
//    }
//
//    // URL PARAMETERS
//
//    /**
//     * Returns all parameters which are set in $parameters
//     * @return array
//     */
//    public function getParameters(): array
//    {
//        return $this->parameters;
//    }
//
//    /**
//     * Set parameters
//     * @param array $parameters
//     */
//    public function setParameters(array $parameters)
//    {
//        if (array_key_exists($parameters, $this->allowedParameters[$this->getMethod()]))
//        {
//            $this->parameters = array_intersect_key($parameters, $this->allowedParameters);
//        }
//    }
//
//    /**
//     * Adds a parameter to $parameters
//     * @param string $parameter
//     * @param $value
//     */
//    public function addParameter(string $parameter, $value)
//    {
//        if (array_key_exists($parameter, $this->allowedParameters[$this->getMethod()])) {
//            $this->parameters[$parameter] = $value;
//        }
//    }
//
//    /**
//     * Returns the Parameter value
//     * @param string $parameter
//     * @return mixed
//     */
//    public function getParameter(string $parameter)
//    {
//        return $this->parameters[$parameter];
//    }
//
//    // METHOD
//
//    /**
//     * Returns the method
//     *
//     * @return  $method
//     */
//    public function getMethod()
//    {
//        return $this->method;
//    }
//
//    /**
//     * Sets the method
//     *
//     * @param  $method
//     *
//     * @return void
//     */
//    public function setMethod($method)
//    {
//        $this->method = ($method);
//    }
//
//    // BUILD
//
//    /**
//     * Builds the URI
//     * @return string
//     */
//    public function buildUri(): string
//    {
//        return $this->getServer() . '/api/v2/' . $this->getPath();
//    }
//
//    /**
//     * Builds a complete request
//     * @return array
//     */
//    public function buildRequest()
//    {
//        // Define the basic request
//        $request = [
//            'base_uri' => $this->buildUri(),
//        ];
//
////        // Add method to request
////        if (array_key_exists($method, $this->allowedMethods))
////        {
////            array_unshift($request, $method);
////        } else {
////            throw new ErrorException('Method ' . $method . ' not allowed! Allowed methods: ' . implode($this->allowedMethods));
////        }
//
//        // If $this->bodyAllowed is set to true, add body to request
//        if ($this->bodyAllowed)
//        {
//            $request['body'] = $this->getBodyParameters();
//        }
//
//        // Return the request
//        return $request;
//    }
//
//    /**
//     * Checks if the request is valid
//     * @return bool
//     */
//    public function isValidRequest(): bool
//    {
//        $isValid = true;
//        $uri = $this->buildUri();
//
//        if (empty($uri))
//        {
//            $isValid = false;
//        }
//
//        if (empty($this->server))
//        {
//            $isValid = false;
//        }
//
//        return $isValid;
//    }

}
