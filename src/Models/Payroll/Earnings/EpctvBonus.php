<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class EpctvBonus
{
    /**
     * Salary in kind
     */
    private float $salaryInKind;

    /**
     * Non salary in kind
     */
    private float $nonSalaryInKind;

    /**
     * Meal in kind
     */
    private float $mealInKind;

    /**
     * Non salary meal in kind
     */
    private float $nonSalaryMealInKind;

    /**
     * Epc tv bonus constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize epc tv bonus data
     */
    private function initialize(array $data): void
    {
        if (isset($data['salary_in_kind'])) {
            $this->setSalaryInKind($data['salary_in_kind']);
        }
        if (isset($data['non_salary_in_kind'])) {
            $this->setNonSalaryInKind($data['non_salary_in_kind']);
        }
        if (isset($data['meal_in_kind'])) {
            $this->setMealInKind($data['meal_in_kind']);
        }
        if (isset($data['non_salary_meal_in_kind'])) {
            $this->setNonSalaryMealInKind($data['non_salary_meal_in_kind']);
        }
    }

    /**
     * Get Salary in kind
     */
    public function getSalaryInKind(): float
    {
        return $this->salaryInKind;
    }

    /**
     * Set Salary in kind
     */
    private function setSalaryInKind(float $salaryInKind): void
    {
        $this->salaryInKind = $salaryInKind;
    }

    /**
     * Get Non Salary in kind
     */
    public function getNonSalaryInKind(): float
    {
        return $this->nonSalaryInKind;
    }

    /**
     * Set Non Salary in kind
     */
    private function setNonSalaryInKind(float $nonSalaryInKind): void
    {
        $this->nonSalaryInKind = $nonSalaryInKind;
    }

    /**
     * Get Meal in kind
     */
    public function getMealInKind(): float
    {
        return $this->mealInKind;
    }

    /**
     * Set Meal in kind
     */
    private function setMealInKind(float $mealInKind): void
    {
        $this->mealInKind = $mealInKind;
    }

    /**
     * Get Non Salary meal in kind
     */
    public function getNonSalaryMealInKind(): float
    {
        return $this->nonSalaryMealInKind;
    }

    /**
     * Set Non Salary meal in kind
     */
    private function setNonSalaryMealInKind(float $nonSalaryMealInKind): void
    {
        $this->nonSalaryMealInKind = $nonSalaryMealInKind;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'salary_in_kind' => $this->getSalaryInKind(),
            'non_salary_in_kind' => $this->getNonSalaryInKind(),
            'meal_in_kind' => $this->getMealInKind(),
            'non_salary_meal_in_kind' => $this->getNonSalaryMealInKind(),
        ];
    }
}
