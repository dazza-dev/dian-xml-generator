<?php

namespace DazzaDev\DianXmlGenerator\Models;

class OperationType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
