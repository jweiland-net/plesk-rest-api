<?php
namespace JWeiland\PleskRestApi\Client\Request;

interface RequestInterface
{
    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getPath();

    /**
     * @return mixed
     */
    public function getBody();
}
