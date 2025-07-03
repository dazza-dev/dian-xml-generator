<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Worker;

class WorkerSubType
{
    /**
     * Worker sub type code
     */
    private string $code;

    /**
     * Worker sub type name
     */
    private string $name;

    /**
     * Worker sub type constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize worker sub type data
     */
    private function initialize(array $data): void
    {
        $this->setCode($data['code']);
        $this->setName($data['name']);
    }

    /**
     * Get worker sub type code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set worker sub type code
     */
    private function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get worker sub type name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set worker sub type name
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
