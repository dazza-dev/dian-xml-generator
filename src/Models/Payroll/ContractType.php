<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

class ContractType
{
    /**
     * Contract type code
     */
    private string $code;

    /**
     * Contract type name
     */
    private string $name;

    /**
     * Contract type constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize contract type data
     */
    private function initialize(array $data): void
    {
        $this->setCode($data['code']);
        $this->setName($data['name']);
    }

    /**
     * Get contract type code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set contract type code
     */
    private function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get contract type name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set contract type name
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
