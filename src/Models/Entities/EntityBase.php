<?php

namespace DazzaDev\DianXmlGenerator\Models\Entities;

use DazzaDev\DianXmlGenerator\Traits\Identification;

class EntityBase
{
    use Identification;

    /**
     * Entity Base constructor
     */
    public function __construct(array $data = [])
    {
        $this->setData($data);
    }

    /**
     * Set data from array
     */
    private function setData(array $data): void
    {
        if (empty($data)) {
            return;
        }

        // Identification type
        $this->setIdentificationType($data['identification_type']);

        // Identification number
        $this->setIdentificationNumber($data['identification_number']);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'identification_type' => $this->identificationType?->toArray(),
            'identification_number' => $this->identificationNumber,
            'verification_code' => $this->verificationCode,
        ];
    }
}
