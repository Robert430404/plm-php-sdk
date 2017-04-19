<?php

namespace Robert430404\PlmSdk\Endpoints\Create;

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
     * @var string
     */
    private $apikey;

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
        $this->apikey     = $client->getApiKey();
        $this->soapClient = $client->getSoapClient();
    }

    /**
     * Sends the operation to the Infinity servers for processing
     *
     * @return stdClass
     */
    public function sendOperation(Entity $entity): stdClass
    {
        $result = $this->soapClient->CreateLoan(
            $entity->toArray()
        );

        return $result;
    }
}