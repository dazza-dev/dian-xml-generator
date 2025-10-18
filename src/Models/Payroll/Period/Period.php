<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Period;

use DazzaDev\DianXmlGenerator\DataLoader;

class Period
{
    /**
     * Period type
     */
    private ?PeriodType $type = null;

    /**
     * Admission date
     */
    private string $admissionDate;

    /**
     * Retirement date
     */
    private ?string $retirementDate = null;

    /**
     * Settlement start date
     */
    private string $settlementStartDate;

    /**
     * Settlement end date
     */
    private string $settlementEndDate;

    /**
     * Worked time in days
     */
    private float $workedTime;

    /**
     * Period constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize period data
     */
    private function initialize(array $data): void
    {
        $this->setType($data['type']);
        $this->setAdmissionDate($data['admission_date']);

        // Retirement date is optional
        if (isset($data['retirement_date'])) {
            $this->setRetirementDate($data['retirement_date']);
        }

        $this->setSettlementStartDate($data['settlement_start_date']);
        $this->setSettlementEndDate($data['settlement_end_date']);
        $this->setWorkedTime((float) $data['worked_time']);
    }

    /**
     * Get period type
     */
    public function getType(): ?PeriodType
    {
        return $this->type;
    }

    /**
     * Set period type
     */
    private function setType(string $type): void
    {
        $periodType = (new DataLoader('payroll-periods'))->getByCode($type);

        $this->type = new PeriodType($periodType);
    }

    /**
     * Get admission date
     */
    public function getAdmissionDate(): string
    {
        return $this->admissionDate;
    }

    /**
     * Set admission date
     */
    private function setAdmissionDate(string $admissionDate): void
    {
        $this->admissionDate = $admissionDate;
    }

    /**
     * Get retirement date
     */
    public function getRetirementDate(): ?string
    {
        return $this->retirementDate;
    }

    /**
     * Set retirement date
     */
    private function setRetirementDate(string $retirementDate): void
    {
        $this->retirementDate = $retirementDate;
    }

    /**
     * Get settlement start date
     */
    public function getSettlementStartDate(): string
    {
        return $this->settlementStartDate;
    }

    /**
     * Set settlement start date
     */
    private function setSettlementStartDate(string $settlementStartDate): void
    {
        $this->settlementStartDate = $settlementStartDate;
    }

    /**
     * Get settlement end date
     */
    public function getSettlementEndDate(): string
    {
        return $this->settlementEndDate;
    }

    /**
     * Set settlement end date
     */
    private function setSettlementEndDate(string $settlementEndDate): void
    {
        $this->settlementEndDate = $settlementEndDate;
    }

    /**
     * Get worked time
     */
    public function getWorkedTime(): float
    {
        return $this->workedTime;
    }

    /**
     * Set worked time
     */
    private function setWorkedTime(float $workedTime): void
    {
        $this->workedTime = $workedTime;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'type' => $this->getType()->toArray(),
            'admission_date' => $this->getAdmissionDate(),
            'retirement_date' => $this->getRetirementDate(),
            'settlement' => [
                'start_date' => $this->getSettlementStartDate(),
                'end_date' => $this->getSettlementEndDate(),
            ],
            'worked_time' => $this->getWorkedTime(),
        ];
    }
}
