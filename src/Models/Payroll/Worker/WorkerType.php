<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Worker;

class WorkerType
{
    /**
     * Worker type code
     */
    private string $code;

    /**
     * Worker type name
     */
    private string $name;

    /**
     * Worker type constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize worker type data
     */
    private function initialize(array $data): void
    {
        $this->setCode($data['code']);
        $this->setName($data['name']);
    }

    /**
     * Get worker type code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set worker type code
     */
    private function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get worker type name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set worker type name
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
