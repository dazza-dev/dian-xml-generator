<?php

namespace DazzaDev\DianXmlGenerator\Models\Payment;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class PaymentMean extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
