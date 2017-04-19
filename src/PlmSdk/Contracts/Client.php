<?php

namespace Robert430404\PlmSdk\Contracts;

use SoapClient;

/**
 * Interface Client
 *
 * @package Robert430404\PlmSdk\Contracts
 */
interface Client
{
    /**
     * Returns the API key to the user
     *
     * @return string
     */
    public function getApiKey(): string;

    /**
     * Returns an instance of the soap client to the user
     *
     * @return SoapClient
     */
    public function getSoapClient(): SoapClient;
}