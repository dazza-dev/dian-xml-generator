<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class LegalStrike extends EarnBase
{
    /**
     * Legal strike constructor
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
