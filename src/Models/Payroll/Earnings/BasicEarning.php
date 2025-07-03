<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class BasicEarning
{
    /**
     * Worked days
     */
    private float $workedDays;

    /**
     * Salary worked
     */
    private float $salaryWorked;

    /**
     * Basic earning constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize basic earning data
     */
    private function initialize(array $data): void
    {
        $this->setWorkedDays($data['worked_days']);
        $this->setSalaryWorked($data['salary_worked']);
    }

    /**
     * Get worked days
     */
    public function getWorkedDays(): float
    {
        return $this->workedDays;
    }

    /**
     * Set worked days
     */
    private function setWorkedDays(float $workedDays): void
    {
        $this->workedDays = $workedDays;
    }

    /**
     * Get salary worked
     */
    public function getSalaryWorked(): float
    {
        return $this->salaryWorked;
    }

    /**
     * Set salary worked
     */
    private function setSalaryWorked(float $salaryWorked): void
    {
        $this->salaryWorked = $salaryWorked;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'worked_days' => $this->getWorkedDays(),
            'salary_worked' => $this->getSalaryWorked(),
        ];
    }
}
