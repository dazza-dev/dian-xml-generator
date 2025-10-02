<?php

namespace DazzaDev\DianXmlGenerator\Models;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class Currency extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
