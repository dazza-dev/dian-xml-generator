<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Other
{
    /**
     * Description
     */
    private string $description;

    /**
     * Salary concept
     */
    private float $salaryConcept;

    /**
     * Non salary assistance
     */
    private float $nonSalaryConcept;

    /**
     * Other constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize other data
     */
    private function initialize(array $data): void
    {
        if (isset($data['description'])) {
            $this->setDescription($data['description']);
        }
        if (isset($data['salary_concept'])) {
            $this->setSalaryConcept($data['salary_concept']);
        }
        if (isset($data['non_salary_concept'])) {
            $this->setNonSalaryConcept($data['non_salary_concept']);
        }
    }

    /**
     * Get Description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set Description
     */
    private function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get Salary Concept
     */
    public function getSalaryConcept(): float
    {
        return $this->salaryConcept;
    }

    /**
     * Set Salary Concept
     */
    private function setSalaryConcept(float $salaryConcept): void
    {
        $this->salaryConcept = $salaryConcept;
    }

    /**
     * Get Non Salary Concept
     */
    public function getNonSalaryConcept(): float
    {
        return $this->nonSalaryConcept;
    }

    /**
     * Set Non Salary Concept
     */
    private function setNonSalaryConcept(float $nonSalaryConcept): void
    {
        $this->nonSalaryConcept = $nonSalaryConcept;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'description' => $this->getDescription(),
            'salary_concept' => $this->getSalaryConcept(),
            'non_salary_concept' => $this->getNonSalaryConcept(),
        ];
    }
}
