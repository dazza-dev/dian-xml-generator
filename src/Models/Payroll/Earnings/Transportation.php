<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class Transportation
{
    /**
     * Transportation assistance
     */
    private ?float $transportationAssistance = null;

    /**
     * Viatic maintenance
     */
    private ?float $viaticMaintenance = null;

    /**
     * Viatic non salary maintenance
     */
    private ?float $viaticNonSalaryMaintenance = null;

    /**
     * Transportation constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize transportation data
     */
    private function initialize(array $data): void
    {
        if (isset($data['transportation_assistance'])) {
            $this->setTransportationAssistance($data['transportation_assistance']);
        }

        if (isset($data['viatic_maintenance'])) {
            $this->setViaticMaintenance($data['viatic_maintenance']);
        }

        if (isset($data['viatic_non_salary_maintenance'])) {
            $this->setViaticNonSalaryMaintenance($data['viatic_non_salary_maintenance']);
        }
    }

    /**
     * Get transportation assistance
     */
    public function getTransportationAssistance(): ?float
    {
        return $this->transportationAssistance;
    }

    /**
     * Set transportation assistance
     */
    private function setTransportationAssistance(float $transportationAssistance): void
    {
        $this->transportationAssistance = $transportationAssistance;
    }

    /**
     * Get viatic maintenance
     */
    public function getViaticMaintenance(): ?float
    {
        return $this->viaticMaintenance;
    }

    /**
     * Set viatic maintenance
     */
    private function setViaticMaintenance(float $viaticMaintenance): void
    {
        $this->viaticMaintenance = $viaticMaintenance;
    }

    /**
     * Get viatic non salary maintenance
     */
    public function getViaticNonSalaryMaintenance(): ?float
    {
        return $this->viaticNonSalaryMaintenance;
    }

    /**
     * Set viatic non salary maintenance
     */
    private function setViaticNonSalaryMaintenance(float $viaticNonSalaryMaintenance): void
    {
        $this->viaticNonSalaryMaintenance = $viaticNonSalaryMaintenance;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'transportation_assistance' => $this->getTransportationAssistance(),
            'viatic_maintenance' => $this->getViaticMaintenance(),
            'viatic_non_salary_maintenance' => $this->getViaticNonSalaryMaintenance(),
        ];
    }
}
