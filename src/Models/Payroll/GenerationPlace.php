<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

use DazzaDev\DianXmlGenerator\Traits\Geography;
use DazzaDev\DianXmlGenerator\Traits\Language;

class GenerationPlace
{
    use Geography;
    use Language;

    /**
     * Generation place constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize generation place data
     */
    private function initialize(array $data): void
    {
        if (empty($data)) {
            return;
        }

        $this->setCity($data['city']);
        $this->setState($data['state']);
        $this->setCountry($data['country']);
        $this->setLanguage($data['language']);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'city' => $this->getCity()?->toArray(),
            'state' => $this->getState()?->toArray(),
            'country' => $this->getCountry()?->toArray(),
            'language' => $this->getLanguage()?->toArray(),
        ];
    }
}
