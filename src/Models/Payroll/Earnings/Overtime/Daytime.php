<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Overtime;

class Daytime extends OvertimeBase
{
    /**
     * Daytime constructor
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
