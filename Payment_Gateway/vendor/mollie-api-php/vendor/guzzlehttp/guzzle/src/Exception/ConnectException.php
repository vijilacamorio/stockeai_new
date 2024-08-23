<?php

namespace _PhpScoper5f636c07d0f55\GuzzleHttp\Exception;

use _PhpScoper5f636c07d0f55\Psr\Http\Message\RequestInterface;
/**
 * Exception thrown when a connection cannot be established.
 *
 * Note that no response is present for a ConnectException
 */
class ConnectException extends \_PhpScoper5f636c07d0f55\GuzzleHttp\Exception\RequestException
{
    public function __construct($message, \_PhpScoper5f636c07d0f55\Psr\Http\Message\RequestInterface $request, \Exception $previous = null, array $handlerContext = [])
    {
        parent::__construct($message, $request, null, $previous, $handlerContext);
    }
    /**
     * @return null
     */
    public function getResponse()
    {
        return null;
    }
    /**
     * @return bool
     */
    public function hasResponse()
    {
        return \false;
    }
}
