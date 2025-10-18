<?php

namespace DazzaDev\DianXmlGenerator\Models\LineItem;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class Unit extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
