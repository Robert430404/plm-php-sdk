<?php

namespace Robert430404\PlmSdk;

use SoapClient;
use Robert430404\PlmSdk\Contracts\Client as ClientInterface;

/**
 * Class Client
 *
 * @package Robert430404\PlmSdk
 */
class Client implements ClientInterface
{
    /**
     * @var string
     */
    private $apikey;

    /**
     * @var string
     */
    private $wsdl;

    /**
     * Client constructor.
     *
     * @param string $apikey
     */
    public function __construct(string $apikey, string $wsdl)
    {
        $this->apikey = $apikey;
        $this->wsdl   = $wsdl;
    }

    /**
     * Gets the api key active in the client
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apikey;
    }

    /**
     * Gets an active SoapClient instance for use with the application
     *
     * @return SoapClient
     */
    public function getSoapClient(): SoapClient
    {
        return new SoapClient($this->wsdl);
    }
}