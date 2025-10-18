<?php

namespace DazzaDev\DianXmlGenerator\Models;

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
