<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

use DazzaDev\DianXmlGenerator\DateValidator;

class EarnBase extends EarnItemBase
{
    /**
     * Start date
     */
    private ?string $startDate = null;

    /**
     * End date
     */
    private ?string $endDate = null;

    /**
     * Earn base constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        // Initialize earn base data
        $this->initialize($data);
    }

    /**
     * Initialize earn base data
     */
    private function initialize(array $data): void
    {
        if (isset($data['start_date'])) {
            $this->setStartDate($data['start_date']);
        }

        if (isset($data['end_date'])) {
            $this->setEndDate($data['end_date']);
        }
    }

    /**
     * Get start date
     */
    public function getStartDate(): ?string
    {
        return $this->startDate;
    }

    /**
     * Set start date
     */
    private function setStartDate(string $startDate): void
    {
        $validator = new DateValidator;

        if (! $validator->isValidDateFormat($startDate)) {
            throw new \InvalidArgumentException('Date must be in Y-m-d format but got: '.$startDate);
        }

        $this->startDate = $startDate;
    }

    /**
     * Get end date
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }

    /**
     * Set end date
     */
    private function setEndDate(string $endDate): void
    {
        $validator = new DateValidator;

        if (! $validator->isValidDateFormat($endDate)) {
            throw new \InvalidArgumentException('Date must be in Y-m-d format but got: '.$endDate);
        }

        $this->endDate = $endDate;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'start_date' => $this->getStartDate(),
            'end_date' => $this->getEndDate(),
            'quantity' => $this->getQuantity(),
            'payment_amount' => $this->getPaymentAmount(),
        ];
    }
}
