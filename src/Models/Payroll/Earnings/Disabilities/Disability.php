<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Disabilities;

use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\EarnBase;

class Disability extends EarnBase
{
    /**
     * Disability type
     */
    private ?DisabilityType $type = null;

    /**
     * Disability constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        $this->initialize($data);
    }

    /**
     * Initialize disability data
     */
    private function initialize(array $data): void
    {
        if (isset($data['type'])) {
            $this->setDisabilityType($data['type']);
        }
    }

    /**
     * Get disability type
     */
    public function getDisabilityType(): ?DisabilityType
    {
        return $this->type;
    }

    /**
     * Set disability type
     */
    private function setDisabilityType(string $type): void
    {
        $disabilityType = (new DataLoader('disability-types'))->getByCode($type);

        $this->type = new DisabilityType($disabilityType);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray() + [
            'type' => $this->getDisabilityType()?->toArray(),
        ];
    }
}
