<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Leaves;

class Leaves
{
    /**
     * Parental leave
     */
    private ?ParentalLeave $parentalLeave = null;

    /**
     * Paid leave
     */
    private ?PaidLeave $paidLeave = null;

    /**
     * Unpaid leave
     */
    private ?UnpaidLeave $unpaidLeave = null;

    /**
     * Leave constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize leave data
     */
    private function initialize(array $data): void
    {
        if (isset($data['parental_leave'])) {
            $this->setParentalLeave($data['parental_leave']);
        }

        if (isset($data['paid_leave'])) {
            $this->setPaidLeave($data['paid_leave']);
        }

        if (isset($data['unpaid_leave'])) {
            $this->setUnpaidLeave($data['unpaid_leave']);
        }
    }

    /**
     * Get parental leave
     */
    public function getParentalLeave(): ?ParentalLeave
    {
        return $this->parentalLeave;
    }

    /**
     * Set parental leave
     */
    private function setParentalLeave(array|ParentalLeave $parentalLeave): void
    {
        $this->parentalLeave = $parentalLeave instanceof ParentalLeave ? $parentalLeave : new ParentalLeave($parentalLeave);
    }

    /**
     * Get paid leave
     */
    public function getPaidLeave(): ?PaidLeave
    {
        return $this->paidLeave;
    }

    /**
     * Set paid leave
     */
    private function setPaidLeave(array|PaidLeave $paidLeave): void
    {
        $this->paidLeave = $paidLeave instanceof PaidLeave ? $paidLeave : new PaidLeave($paidLeave);
    }

    /**
     * Get unpaid leave
     */
    public function getUnpaidLeave(): ?UnpaidLeave
    {
        return $this->unpaidLeave;
    }

    /**
     * Set unpaid leave
     */
    private function setUnpaidLeave(array|UnpaidLeave $unpaidLeave): void
    {
        $this->unpaidLeave = $unpaidLeave instanceof UnpaidLeave ? $unpaidLeave : new UnpaidLeave($unpaidLeave);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'parental_leave' => $this->getParentalLeave()?->toArray(),
            'paid_leave' => $this->getPaidLeave()?->toArray(),
            'unpaid_leave' => $this->getUnpaidLeave()?->toArray(),
        ];
    }
}
