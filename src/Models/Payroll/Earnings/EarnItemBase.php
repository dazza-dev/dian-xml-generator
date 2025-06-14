<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

class EarnItemBase
{
    /**
     * Quantity
     */
    private ?float $quantity = null;

    /**
     * Percentage
     */
    private ?float $percentage = null;

    /**
     * Payment amount
     */
    private ?float $paymentAmount = null;

    /**
     * Overtime base constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize overtime base data
     */
    private function initialize(array $data): void
    {
        if (isset($data['quantity'])) {
            $this->setQuantity($data['quantity']);
        }

        if (isset($data['percentage'])) {
            $this->setPercentage($data['percentage']);
        }

        if (isset($data['payment_amount'])) {
            $this->setPaymentAmount($data['payment_amount']);
        }
    }

    /**
     * Get quantity
     */
    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    /**
     * Set quantity
     */
    private function setQuantity(float $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Get percentage
     */
    public function getPercentage(): ?float
    {
        return $this->percentage;
    }

    /**
     * Set percentage
     */
    private function setPercentage(float $percentage): void
    {
        $this->percentage = $percentage;
    }

    /**
     * Get payment amount
     */
    public function getPaymentAmount(): ?float
    {
        return $this->paymentAmount;
    }

    /**
     * Set payment amount
     */
    private function setPaymentAmount(float $paymentAmount): void
    {
        $this->paymentAmount = $paymentAmount;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'quantity' => $this->getQuantity(),
            'percentage' => $this->getPercentage(),
            'payment_amount' => $this->getPaymentAmount(),
        ];
    }
}
