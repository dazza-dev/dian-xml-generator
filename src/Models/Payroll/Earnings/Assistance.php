<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Assistance
{
    /**
     * Salary assistance
     */
    private float $salaryAssistance;

    /**
     * Non salary assistance
     */
    private float $nonSalaryAssistance;

    /**
     * Bonus constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize bonus data
     */
    private function initialize(array $data): void
    {
        $this->setSalaryAssistance($data['salary_assistance']);
        $this->setNonSalaryAssistance($data['non_salary_assistance']);
    }

    /**
     * Get Salary Assistance
     */
    public function getSalaryAssistance(): float
    {
        return $this->salaryAssistance;
    }

    /**
     * Set Salary Assistance
     */
    private function setSalaryAssistance(float $salaryAssistance): void
    {
        $this->salaryAssistance = $salaryAssistance;
    }

    /**
     * Get Non Salary Assistance
     */
    public function getNonSalaryAssistance(): float
    {
        return $this->nonSalaryAssistance;
    }

    /**
     * Set Non Salary Assistance
     */
    private function setNonSalaryAssistance(float $nonSalaryAssistance): void
    {
        $this->nonSalaryAssistance = $nonSalaryAssistance;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'salary_assistance' => $this->getSalaryAssistance(),
            'non_salary_assistance' => $this->getNonSalaryAssistance(),
        ];
    }
}
