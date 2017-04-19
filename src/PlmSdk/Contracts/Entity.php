<?php

namespace Robert430404\PlmSdk\Contracts;

/**
 * Interface Entity
 *
 * @package Robert430404\PlmSdk\Contracts
 */
interface Entity
{
    /**
     * Returns an array representation of the data
     *
     * @return array
     */
    public function toArray(): array;
}