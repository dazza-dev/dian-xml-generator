<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Period;

class PeriodType
{
    /**
     * Period type code
     */
    private string $code;

    /**
     * Period type name
     */
    private string $name;

    /**
     * Period type constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize period type data
     */
    private function initialize(array $data): void
    {
        $this->setCode($data['code']);
        $this->setName($data['name']);
    }

    /**
     * Get period type code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set period type code
     */
    private function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get period type name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set period type name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
        ];
    }
}
