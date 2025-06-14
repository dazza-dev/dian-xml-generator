<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

class Payroll extends PayrollBase
{
    /**
     * Novelty
     */
    public bool $novelty = false;

    /**
     * Novelty identifier
     */
    public string $noveltyIdentifier = '';

    /**
     * Payroll constructor
     */
    public function __construct(array $data = [])
    {
        // Document type
        $this->setDocumentType('102');

        // Initialize payroll data
        parent::__construct($data);

        // Set novelty
        if (isset($data['novelty'])) {
            $this->setNovelty($data['novelty']);
        }

        // Set novelty identifier
        if (isset($data['novelty_identifier'])) {
            $this->setNoveltyIdentifier($data['novelty_identifier']);
        }
    }

    /**
     * Set novelty
     */
    public function setNovelty(bool $novelty): void
    {
        $this->novelty = $novelty;
    }

    /**
     * Get novelty
     */
    public function getNovelty(): bool
    {
        return $this->novelty;
    }

    /**
     * Set novelty identifier
     */
    public function setNoveltyIdentifier(string $noveltyIdentifier): void
    {
        $this->noveltyIdentifier = $noveltyIdentifier;
    }

    /**
     * Get novelty identifier
     */
    public function getNoveltyIdentifier(): string
    {
        return $this->noveltyIdentifier;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray() + [
            'novelty' => $this->getNovelty(),
            'novelty_identifier' => $this->getNoveltyIdentifier(),
        ];
    }
}
