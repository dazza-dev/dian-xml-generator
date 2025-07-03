<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

class DeductionItemBase
{
    /**
     * Percentage
     */
    private ?float $percentage = null;

    /**
     * Deduction
     */
    private ?float $deduction = null;

    /**
     * Deduction item constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize deduction item data
     */
    private function initialize(array $data): void
    {
        if (isset($data['percentage'])) {
            $this->setPercentage($data['percentage']);
        }

        if (isset($data['deduction'])) {
            $this->setDeduction($data['deduction']);
        }
    }

    /**
     * Get percentage
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    /**
     * Set percentage
     */
    private function setPercentage(float $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Get deduction
     */
    public function getDeduction(): ?float
    {
        return $this->deduction;
    }

    /**
     * Set deduction
     */
    private function setDeduction(float $deduction): void
    {
        $this->deduction = $deduction;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'percentage' => $this->getPercentage(),
            'deduction' => $this->getDeduction(),
        ];
    }
}
