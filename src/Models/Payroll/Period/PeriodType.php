<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Period;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class PeriodType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
