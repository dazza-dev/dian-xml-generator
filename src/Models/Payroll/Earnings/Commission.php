<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Commission
{
    /**
     * Commission
     */
    private float $commission;

    /**
     * Commission constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize commission data
     */
    private function initialize(array $data): void
    {
        $this->setCommission($data['commission']);
    }

    /**
     * Get Commission
     */
    public function getCommission(): float
    {
        return $this->commission;
    }

    /**
     * Set Commission
     */
    private function setCommission(float $commission): void
    {
        $this->commission = $commission;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'commission' => $this->getCommission(),
        ];
    }
}
