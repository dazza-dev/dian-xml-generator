<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Overtime;

use DazzaDev\DianXmlGenerator\DateValidator;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\EarnItemBase;

class OvertimeBase extends EarnItemBase
{
    /**
     * Start time
     */
    private ?string $startTime = null;

    /**
     * End time
     */
    private ?string $endTime = null;

    /**
     * Overtime base constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        // Initialize overtime base data
        $this->initialize($data);
    }

    /**
     * Initialize overtime base data
     */
    private function initialize(array $data): void
    {
        if (isset($data['start_time'])) {
            $this->setStartTime($data['start_time']);
        }

        if (isset($data['end_time'])) {
            $this->setEndTime($data['end_time']);
        }
    }

    /**
     * Get start time
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * Set start time
     */
    private function setStartTime(string $startTime): void
    {
        $dateValidator = new DateValidator;

        $this->startTime = $dateValidator->getDateTime($startTime);
    }

    /**
     * Get end time
     */
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }

    /**
     * Set end time
     */
    private function setEndTime(string $endTime): void
    {
        $dateValidator = new DateValidator;

        $this->endTime = $dateValidator->getDateTime($endTime);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'start_time' => $this->getStartTime(),
            'end_time' => $this->getEndTime(),
            'quantity' => $this->getQuantity(),
            'percentage' => $this->getPercentage(),
            'payment_amount' => $this->getPaymentAmount(),
        ];
    }
}
