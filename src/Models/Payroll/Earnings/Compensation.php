<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Compensation
{
    /**
     * Ordinary
     */
    private float $ordinary;

    /**
     * Extraordinary
     */
    private float $extraordinary;

    /**
     * Compensation constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize compensation data
     */
    private function initialize(array $data): void
    {
        if (isset($data['ordinary'])) {
            $this->setOrdinary($data['ordinary']);
        }
        if (isset($data['extraordinary'])) {
            $this->setExtraordinary($data['extraordinary']);
        }
    }

    /**
     * Get Ordinary
     */
    public function getOrdinary(): float
    {
        return $this->ordinary;
    }

    /**
     * Set Ordinary
     */
    private function setOrdinary(float $ordinary): void
    {
        $this->ordinary = $ordinary;
    }

    /**
     * Get Extraordinary
     */
    public function getExtraordinary(): float
    {
        return $this->extraordinary;
    }

    /**
     * Set Extraordinary
     */
    private function setExtraordinary(float $extraordinary): void
    {
        $this->extraordinary = $extraordinary;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'ordinary' => $this->getOrdinary(),
            'extraordinary' => $this->getExtraordinary(),
        ];
    }
}
