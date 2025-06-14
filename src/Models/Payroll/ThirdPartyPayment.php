<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

class ThirdPartyPayment
{
    /**
     * Third party payment
     */
    private float $thirdPartyPayment;

    /**
     * Third party payment constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize third party payment data
     */
    private function initialize(array $data): void
    {
        $this->setThirdPartyPayment($data['third_party_payment']);
    }

    /**
     * Get Third Party Payment
     */
    public function getThirdPartyPayment(): float
    {
        return $this->thirdPartyPayment;
    }

    /**
     * Set Third Party Payment
     */
    private function setThirdPartyPayment(float $thirdPartyPayment): void
    {
        $this->thirdPartyPayment = $thirdPartyPayment;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'third_party_payment' => $this->getThirdPartyPayment(),
        ];
    }
}
