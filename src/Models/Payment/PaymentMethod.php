<?php

namespace DazzaDev\DianXmlGenerator\Models\Payment;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class PaymentMethod extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
