<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Bonus
{
    /**
     * Salary bonus
     */
    private float $salaryBonus;

    /**
     * Non salary bonus
     */
    private float $nonSalaryBonus;

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
        $this->setSalaryBonus($data['salary_bonus']);
        $this->setNonSalaryBonus($data['non_salary_bonus']);
    }

    /**
     * Get Salary Bonus
     */
    public function getSalaryBonus(): float
    {
        return $this->salaryBonus;
    }

    /**
     * Set Salary Bonus
     */
    private function setSalaryBonus(float $salaryBonus): void
    {
        $this->salaryBonus = $salaryBonus;
    }

    /**
     * Get Non Salary Bonus
     */
    public function getNonSalaryBonus(): float
    {
        return $this->nonSalaryBonus;
    }

    /**
     * Set Non Salary Bonus
     */
    private function setNonSalaryBonus(float $nonSalaryBonus): void
    {
        $this->nonSalaryBonus = $nonSalaryBonus;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'salary_bonus' => $this->getSalaryBonus(),
            'non_salary_bonus' => $this->getNonSalaryBonus(),
        ];
    }
}
