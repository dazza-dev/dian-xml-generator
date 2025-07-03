<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Vacations;

use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\EarnBase;

class CommonVacation extends EarnBase
{
    /**
     * Common vacation constructor
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
