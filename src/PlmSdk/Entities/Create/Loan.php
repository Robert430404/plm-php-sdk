<?php

namespace Robert430404\PlmSdk\Entities\Create;

use Robert430404\PlmSdk\Contracts\Entity;

/**
 * Class Loan
 *
 * @package Robert430404\PlmSdk\Entities\Create
 */
class Loan implements Entity
{
    /**
     * @var string
     */
    private $accessKey;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $storeId;

    /**
     * @var int
     */
    private $loanTypeId;

    /**
     * @var string
     */
    private $fundingType;

    /**
     * @var string
     */
    private $amount;

    /**
     * @var string|null
     */
    private $promotionalCode;

    /**
     * Loan constructor.
     *
     * Creates an Entity representing the provided data.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->accessKey   = $data['accessKey'];
        $this->customerId  = $data['customerId'];
        $this->storeId     = $data['storeId'];
        $this->loanTypeId  = $data['loanTypeId'];
        $this->fundingType = $data['loanApplication']['FundingType'];
        $this->fundingType = money_format('%i', $data['loanApplication']['Amount']);
        $this->fundingType = $data['loanApplication']['PromotionalCode'];
    }

    /**
     * Returns an array representation of the data
     *
     * This method returns the data formatted for use with the Infinity API
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'accessKey'       => $this->accessKey,
            'customerId'      => $this->customerId,
            'storeId'         => $this->storeId,
            'loanTypeId'      => $this->loanTypeId,
            'loanApplication' => [
                'FundingType'     => $this->fundingType,
                'Amount'          => $this->amount,
                'PromotionalCode' => $this->promotionalCode,
            ],
        ];
    }

    /**
     * @return string
     */
    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    /**
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerId;
    }

    /**
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
    }

    /**
     * @return int
     */
    public function getLoanTypeId(): int
    {
        return $this->loanTypeId;
    }

    /**
     * @return string
     */
    public function getFundingType(): string
    {
        return $this->fundingType;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @return null|string
     */
    public function getPromotionalCode(): ?string
    {
        return $this->promotionalCode;
    }
}