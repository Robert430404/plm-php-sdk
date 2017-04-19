<?php

namespace Robert430404\PlmSdk\Contracts;

use stdClass;

/**
 * Interface Endpoint
 *
 * @package Robert430404\PlmSdk\Contracts
 */
interface Endpoint
{
    /**
     * Sends the operation to the Infinity servers for processing
     *
     * @return stdClass
     */
    public function sendOperation(Entity $entity): stdClass;
}