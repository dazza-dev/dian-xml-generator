<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

class WageAssignment extends DeductionItemBase
{
    /**
     * Description
     */
    private ?string $description = null;

    /**
     * Wage assignment constructor
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
        if (isset($data['description'])) {
            $this->setDescription($data['description']);
        }
    }

    /**
     * Get description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Set description
     */
    private function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'deduction' => $this->getDeduction(),
            'description' => $this->getDescription(),
        ];
    }
}
