<?php

namespace Robert430404\PlmSdk\Endpoints\Create;

use SoapFault;
use stdClass;
use SoapClient;
use Robert430404\PlmSdk\Contracts\Entity;
use Robert430404\PlmSdk\Contracts\Client;
use Robert430404\PlmSdk\Contracts\Endpoint;

/**
 * Class Loan
 *
 * @package Robert430404\PlmSdk\Endpoints\Create
 */
class Loan implements Endpoint
{
    /**
     * @var SoapClient
     */
    private $soapClient;

    /**
     * Loan constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->soapClient = $client->getSoapClient();
    }

    /**
     * Sends the operation to the Infinity servers for processing
     *
     * @return stdClass  This is the response given from the SoapClient upon a successful request
     * @throws SoapFault Can throw a SoapFault if there is an error with the request body
     */
    public function sendOperation(Entity $entity): stdClass
    {
        return $this->soapClient->CreateLoan(
            $entity->toArray()
        );
    }
}