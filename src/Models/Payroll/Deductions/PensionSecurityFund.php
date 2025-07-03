<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

class PensionSecurityFund extends DeductionItemBase
{
    /**
     * Subsistence percentage
     */
    private ?float $subsistencePercentage = null;

    /**
     * Subsistence deduction
     */
    private ?float $subsistenceDeduction = null;

    /**
     * Pension security fund constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        $this->initialize($data);
    }

    /**
     * Initialize pension security fund data
     */
    private function initialize(array $data): void
    {
        if (isset($data['subsistence_percentage'])) {
            $this->setSubsistencePercentage($data['subsistence_percentage']);
        }

        if (isset($data['subsistence_deduction'])) {
            $this->setSubsistenceDeduction($data['subsistence_deduction']);
        }
    }

    /**
     * Get subsistence percentage
     */
    public function getSubsistencePercentage(): ?float
    {
        return $this->subsistencePercentage;
    }

    /**
     * Set subsistence percentage
     */
    private function setSubsistencePercentage(float $subsistencePercentage): void
    {
        $this->subsistencePercentage = $subsistencePercentage;
    }

    /**
     * Get subsistence deduction
     */
    public function getSubsistenceDeduction(): ?float
    {
        return $this->subsistenceDeduction;
    }

    /**
     * Set subsistence deduction
     */
    private function setSubsistenceDeduction(float $subsistenceDeduction): void
    {
        $this->subsistenceDeduction = $subsistenceDeduction;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'percentage' => $this->getPercentage(),
            'deduction' => $this->getDeduction(),
            'subsistence_percentage' => $this->getSubsistencePercentage(),
            'subsistence_deduction' => $this->getSubsistenceDeduction(),
        ];
    }
}
