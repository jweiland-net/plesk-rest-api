<?php
namespace JWeiland\PleskRestApi\Client\Request;

interface RequestInterface
{
    /**
     * Returns the path
     *
     * @return string
     */
    public function getPath(): string;

    /**
     * Check, if current Request is valid
     *
     * @return bool
     */
    public function isValidRequest(): bool;

    /**
     * Merge all parameters to build an URI
     *
     * @return string
     */
    public function buildUri(): string;
}
