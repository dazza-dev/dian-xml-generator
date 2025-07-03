<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

class Health extends DeductionItemBase
{
    /**
     * Health constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray();
    }
}
