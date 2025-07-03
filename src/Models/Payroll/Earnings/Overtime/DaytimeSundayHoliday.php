<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Overtime;

class DaytimeSundayHoliday extends OvertimeBase
{
    /**
     * Daytime Sunday or holiday constructor
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
