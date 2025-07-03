<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Leaves;

use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\EarnBase;

class ParentalLeave extends EarnBase
{
    /**
     * Parental leave constructor
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
