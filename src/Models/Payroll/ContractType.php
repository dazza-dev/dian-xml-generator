<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class ContractType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
