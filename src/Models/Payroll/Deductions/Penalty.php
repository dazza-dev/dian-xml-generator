<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

class Penalty
{
    /**
     * Public penalty
     */
    private ?float $publicPenalty = null;

    /**
     * Private penalty
     */
    private ?float $privatePenalty = null;

    /**
     * Penalty constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize penalty data
     */
    private function initialize(array $data): void
    {
        if (isset($data['public_penalty'])) {
            $this->setPublicPenalty($data['public_penalty']);
        }

        if (isset($data['private_penalty'])) {
            $this->setPrivatePenalty($data['private_penalty']);
        }
    }

    /**
     * Get public penalty
     */
    public function getPublicPenalty(): ?float
    {
        return $this->publicPenalty;
    }

    /**
     * Set public penalty
     */
    private function setPublicPenalty(float $publicPenalty): void
    {
        $this->publicPenalty = $publicPenalty;
    }

    /**
     * Get private penalty
     */
    public function getPrivatePenalty(): ?float
    {
        return $this->privatePenalty;
    }

    /**
     * Set private penalty
     */
    private function setPrivatePenalty(float $privatePenalty): void
    {
        $this->privatePenalty = $privatePenalty;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'public_penalty' => $this->getPublicPenalty(),
            'private_penalty' => $this->getPrivatePenalty(),
        ];
    }
}
