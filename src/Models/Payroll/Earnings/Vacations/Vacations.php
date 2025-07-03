<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Vacations;

class Vacations
{
    /**
     * Common vacation
     */
    private ?CommonVacation $commonVacation = null;

    /**
     * Paid vacation
     */
    private ?PaidVacation $paidVacation = null;

    /**
     * Common vacation constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize vacations data
     */
    private function initialize(array $data): void
    {
        if (empty($data)) {
            return;
        }

        if (isset($data['common'])) {
            $this->setCommonVacation($data['common']);
        }

        if (isset($data['paid'])) {
            $this->setPaidVacation($data['paid']);
        }
    }

    /**
     * Set common vacation
     */
    private function setCommonVacation(array|CommonVacation $commonVacation): void
    {
        if ($commonVacation instanceof CommonVacation) {
            $this->commonVacation = $commonVacation;
        } else {
            $this->commonVacation = new CommonVacation($commonVacation);
        }
    }

    /**
     * Set paid vacation
     */
    private function setPaidVacation(array|PaidVacation $paidVacation): void
    {
        if ($paidVacation instanceof PaidVacation) {
            $this->paidVacation = $paidVacation;
        } else {
            $this->paidVacation = new PaidVacation($paidVacation);
        }
    }

    /**
     * Get common vacation
     */
    public function getCommonVacation(): CommonVacation
    {
        return $this->commonVacation;
    }

    /**
     * Get paid vacation
     */
    public function getPaidVacation(): PaidVacation
    {
        return $this->paidVacation;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'common' => $this->getCommonVacation()->toArray(),
            'paid' => $this->getPaidVacation()->toArray(),
        ];
    }
}
