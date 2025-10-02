<?php

namespace DazzaDev\DianXmlGenerator\Models\AllowanceCharge;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class AllowanceChargeReason extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
