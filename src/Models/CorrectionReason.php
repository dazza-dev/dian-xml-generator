<?php

namespace DazzaDev\DianXmlGenerator\Models;

class CorrectionReason extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
