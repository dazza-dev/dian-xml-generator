<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class ServiceBonus extends EarnItemBase
{
    /**
     * Non Salary Payment Amount
     */
    private float $nonSalaryPaymentAmount;

    /**
     * Service bonus constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        // Initialize
        $this->initialize($data);
    }

    /**
     * Initialize service bonus data
     */
    private function initialize(array $data): void
    {
        $this->setNonSalaryPaymentAmount($data['non_salary_payment_amount']);
    }

    /**
     * Get Non Salary Payment Amount
     */
    public function getNonSalaryPaymentAmount(): float
    {
        return $this->nonSalaryPaymentAmount;
    }

    /**
     * Set Non Salary Payment Amount
     */
    private function setNonSalaryPaymentAmount(float $nonSalaryPaymentAmount): void
    {
        $this->nonSalaryPaymentAmount = $nonSalaryPaymentAmount;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'quantity' => $this->getQuantity(),
            'payment_amount' => $this->getPaymentAmount(),
            'non_salary_payment_amount' => $this->getNonSalaryPaymentAmount(),
        ];
    }
}
