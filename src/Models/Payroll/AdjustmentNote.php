<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

use DazzaDev\DianXmlGenerator\DataLoader;

class AdjustmentNote extends PayrollBase
{
    /**
     * Adjustment note type
     */
    private ?AdjustmentNoteType $adjustmentNoteType = null;

    /**
     * Predecessor
     */
    private ?Predecessor $predecessor = null;

    /**
     * Payroll adjustment note constructor
     */
    public function __construct(array $data = [])
    {
        // Document type
        $this->setDocumentType('103');

        // Adjustment note type
        if (isset($data['type'])) {
            $this->setAdjustmentNoteType($data['type']);
        }

        // Initialize payroll adjustment note data
        parent::__construct($data);
    }

    /**
     * Get adjustment note type
     */
    public function getAdjustmentNoteType(): ?AdjustmentNoteType
    {
        return $this->adjustmentNoteType;
    }

    /**
     * Set adjustment note type
     */
    public function setAdjustmentNoteType(string $adjustmentNoteTypeCode): void
    {
        $adjustmentNoteType = (new DataLoader('adjustment-notes-payroll'))->getByCode($adjustmentNoteTypeCode);

        $this->adjustmentNoteType = new AdjustmentNoteType($adjustmentNoteType);
    }

    /**
     * Get predecessor
     */
    public function getPredecessor(): ?Predecessor
    {
        return $this->predecessor;
    }

    /**
     * Set predecessor
     */
    public function setPredecessor(array $predecessor): void
    {
        $this->predecessor = new Predecessor($predecessor);
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray() + [
            'type' => $this->getAdjustmentNoteType()?->toArray(),
            'predecessor' => $this->getPredecessor()?->toArray(),
        ];
    }
}
