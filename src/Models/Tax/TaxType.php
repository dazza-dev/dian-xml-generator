<?php

namespace DazzaDev\DianXmlGenerator\Models\Tax;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class TaxType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
