<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Leaves;

use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\EarnBase;

class PaidLeave extends EarnBase
{
    /**
     * Paid leave constructor
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
