<?php

namespace DazzaDev\DianXmlGenerator\Models\Entities;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class Liability extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
