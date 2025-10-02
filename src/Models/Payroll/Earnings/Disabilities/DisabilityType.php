<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Disabilities;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class DisabilityType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
