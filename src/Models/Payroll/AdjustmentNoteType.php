<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

class AdjustmentNoteType
{
    /**
     * Adjustment note type code
     */
    private string $code;

    /**
     * Adjustment note type name
     */
    private string $name;

    /**
     * Adjustment note type constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize adjustment note type data
     */
    private function initialize(array $data): void
    {
        $this->setCode($data['code']);
        $this->setName($data['name']);
    }

    /**
     * Get adjustment note type code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Set adjustment note type code
     */
    private function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Get adjustment note type name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set adjustment note type name
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
