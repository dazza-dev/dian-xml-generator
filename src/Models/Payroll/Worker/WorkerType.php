<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Worker;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class WorkerType extends BaseModel
{
    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return $this->getBaseArray();
    }
}
