<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Severance extends EarnItemBase
{
    /**
     * Interest Payment Amount
     */
    private float $interestPaymentAmount;

    /**
     * Severance constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        // Initialize
        $this->initialize($data);
    }

    /**
     * Initialize severance data
     */
    private function initialize(array $data): void
    {
        $this->setInterestPaymentAmount($data['interest_payment_amount']);
    }

    /**
     * Get Interest Payment Amount
     */
    public function getInterestPaymentAmount(): float
    {
        return $this->interestPaymentAmount;
    }

    /**
     * Set Interest Payment Amount
     */
    private function setInterestPaymentAmount(float $interestPaymentAmount): void
    {
        $this->interestPaymentAmount = $interestPaymentAmount;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'payment_amount' => $this->getPaymentAmount(),
            'percentage' => $this->getPercentage(),
            'interest_payment_amount' => $this->getInterestPaymentAmount(),
        ];
    }
}
