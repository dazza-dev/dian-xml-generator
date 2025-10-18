<?php

namespace DazzaDev\DianXmlGenerator\Models\Entities;

class Provider extends EntityPayroll
{
    /**
     * Provider constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray();
    }
}
