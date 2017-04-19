<?php

namespace Robert430404\PlmSdk\Entities\Create;

use Robert430404\PlmSdk\Contracts\Entity;

/**
 * Class Customer
 *
 * @package Robert430404\PlmSdk\Entities\Create
 */
class Customer implements Entity
{
    /**
     * @var array
     */
    private $data;

    /**
     * Customer constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Returns an array representation of the data
     *
     * @return array
     */
    public function toArray(): array
    {
        // TODO: Implement toArray() method.
    }
}