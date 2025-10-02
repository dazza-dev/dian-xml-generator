<?php

namespace DazzaDev\DianXmlGenerator\Models;

class Language extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
