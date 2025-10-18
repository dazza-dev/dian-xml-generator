<?php

namespace DazzaDev\DianXmlGenerator\Models\Event;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class EventType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
