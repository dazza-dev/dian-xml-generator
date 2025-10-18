<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

use DazzaDev\DianXmlGenerator\DateValidator;

class Predecessor
{
    /**
     * Predecessor number
     */
    private string $number;

    /**
     * Predecessor CUNE
     */
    private string $cune;

    /**
     * Predecessor issue date
     */
    private string $issueDate;

    /**
     * Predecessor constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize adjustment note type data
     */
    private function initialize(array $data): void
    {
        $this->setNumber($data['number']);
        $this->setCune($data['cune']);
        $this->setIssueDate($data['issue_date']);
    }

    /**
     * Get adjustment note type code
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set adjustment note type code
     */
    private function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Get adjustment note type name
     */
    public function getCune(): string
    {
        return $this->cune;
    }

    /**
     * Set adjustment note type name
     */
    private function setCune(string $cune): void
    {
        $this->cune = $cune;
    }

    /**
     * Get adjustment note type name
     */
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    /**
     * Set adjustment note type name
     */
    private function setIssueDate(string $issueDate): void
    {
        $validator = new DateValidator;
        if (! $validator->isValidDateFormat($issueDate)) {
            throw new \Exception('Invalid date format');
        }

        $this->issueDate = $issueDate;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'number' => $this->number,
            'cune' => $this->cune,
            'issue_date' => $this->issueDate,
        ];
    }
}
