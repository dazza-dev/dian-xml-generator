<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

class PensionFund extends DeductionItemBase
{
    /**
     * Pension fund constructor
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
