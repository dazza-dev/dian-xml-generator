<?php

namespace DazzaDev\DianXmlGenerator\Models\LineItem;

use DazzaDev\DianXmlGenerator\Models\BaseModel;

class LineItemType extends BaseModel
{
    /**
     * Agency id
     */
    private string $agencyId;

    /**
     * LineItemType constructor
     */
    public function __construct(array $data = [])
    {
        $this->initializeAdditionalProperties($data);
    }

    /**
     * Initialize additional properties specific to LineItemType
     */
    protected function initializeAdditionalProperties(array $data): void
    {
        if (isset($data['agency_id'])) {
            $this->setAgencyId($data['agency_id']);
        }
    }

    /**
     * Get agency id
     */
    public function getAgencyId(): string
    {
        return $this->agencyId;
    }

    /**
     * Set agency id
     */
    private function setAgencyId(string $agencyId): void
    {
        $this->agencyId = $agencyId;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return array_merge($this->getBaseArray(), [
            'agency_id' => $this->getAgencyId(),
        ]);
    }
}
