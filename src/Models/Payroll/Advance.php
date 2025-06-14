<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

class Advance
{
    /**
     * Advance
     */
    private float $advance;

    /**
     * Advance constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize advance data
     */
    private function initialize(array $data): void
    {
        $this->setAdvance($data['advance']);
    }

    /**
     * Get Advance
     */
    public function getAdvance(): float
    {
        return $this->advance;
    }

    /**
     * Set Advance
     */
    private function setAdvance(float $advance): void
    {
        $this->advance = $advance;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'advance' => $this->getAdvance(),
        ];
    }
}
