<?php

namespace Robert430404\PlmSdk\Endpoints\Create;

use stdClass;
use SoapClient;
use Robert430404\PlmSdk\Client;
use Robert430404\PlmSdk\Contracts\Entity;
use Robert430404\PlmSdk\Contracts\Endpoint;

/**
 * Class Customer
 *
 * @package Robert430404\PlmSdk\Endpoints\Create
 */
class Customer implements Endpoint
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
     * Customer constructor.
     */
    public function __construct(Client $client)
    {
        $this->apikey     = $client->getApiKey();
        $this->soapClient = $client->getSoapClient();
    }

    /**
     * Sends the operation to the infinity servers
     *
     * @param Entity $entity
     * @return stdClass
     */
    public function sendOperation(Entity $entity): stdClass
    {
        $result = $this->soapClient->CreateCustomer(
            $entity->toArray()
        );

        return $result;
    }
}