<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll;

use DateTime;
use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\DateValidator;
use DazzaDev\DianXmlGenerator\Enums\Environments;
use DazzaDev\DianXmlGenerator\Models\Currency;
use DazzaDev\DianXmlGenerator\Models\Entities\Employee;
use DazzaDev\DianXmlGenerator\Models\Entities\Employer;
use DazzaDev\DianXmlGenerator\Models\Entities\Provider;
use DazzaDev\DianXmlGenerator\Models\Payment\PaymentPayroll;
use DazzaDev\DianXmlGenerator\Models\Payroll\Deductions\Deductions;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Earnings;
use DazzaDev\DianXmlGenerator\Models\Payroll\Period\Period;
use DazzaDev\DianXmlGenerator\Traits\Environment;
use DazzaDev\DianXmlGenerator\Traits\TraitDocumentType;

class PayrollBase
{
    use Environment;
    use TraitDocumentType;

    private string $prefix;

    private string $number;

    private string $issueDate;

    private string $issueTime;

    private ?string $note;

    private ?Currency $currency = null;

    private ?Period $period = null;

    private ?GenerationPlace $generationPlace = null;

    private ?Provider $provider = null;

    private ?Employer $employer = null;

    private ?Employee $employee = null;

    private ?PaymentPayroll $payment = null;

    private ?Earnings $earnings = null;

    private ?Deductions $deductions = null;

    private ?float $rounding = null;

    private ?float $totalEarned = null;

    private ?float $deductionsTotal = null;

    private ?float $totalVoucher = null;

    /**
     * Payroll Base constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize payroll data
     */
    private function initialize(array $data): void
    {
        if (empty($data)) {
            return;
        }

        // Environment
        if (isset($data['environment'])) {
            $this->setEnvironment(Environments::from($data['environment']));
        }

        // Software
        if (isset($data['software']) && is_array($data['software'])) {
            $this->setSoftware($data['software']);
        }

        // Prefix
        if (isset($data['prefix'])) {
            $this->setPrefix($data['prefix']);
        }

        // Number
        if (isset($data['number'])) {
            $this->setNumber($data['number']);
        }

        // Issue date
        if (isset($data['date'])) {
            $this->setDate($data['date']);
        }

        // Currency
        if (isset($data['currency'])) {
            $this->setCurrency($data['currency']);
        }

        // Note
        if (isset($data['note'])) {
            $this->setNote($data['note']);
        }

        // Period
        if (isset($data['period']) && is_array($data['period'])) {
            $this->setPeriod($data['period']);
        }

        // Generation place
        if (isset($data['generation_place']) && is_array($data['generation_place'])) {
            $this->setGenerationPlace($data['generation_place']);
        }

        // Provider
        if (isset($data['provider']) && is_array($data['provider'])) {
            $this->setProvider($data['provider']);
        }

        // Employer
        if (isset($data['employer']) && is_array($data['employer'])) {
            $this->setEmployer($data['employer']);
        }

        // Employee
        if (isset($data['employee']) && is_array($data['employee'])) {
            $this->setEmployee($data['employee']);
        }

        // Payment
        if (isset($data['payment']) && is_array($data['payment'])) {
            $this->setPayment($data['payment']);
        }

        // Earnings
        if (isset($data['earnings']) && is_array($data['earnings'])) {
            $this->setEarnings($data['earnings']);
        }

        // Deductions
        if (isset($data['deductions']) && is_array($data['deductions'])) {
            $this->setDeductions($data['deductions']);
        }

        // Total
        if (isset($data['rounding'])) {
            $this->setRounding($data['rounding']);
        }

        // Total Earned
        if (isset($data['total_earned'])) {
            $this->setTotalEarned($data['total_earned']);
        }

        // Deductions Total
        if (isset($data['deductions_total'])) {
            $this->setDeductionsTotal($data['deductions_total']);
        }

        // Total Voucher
        if (isset($data['total_voucher'])) {
            $this->setTotalVoucher($data['total_voucher']);
        }
    }

    /**
     * Get prefix
     */
    public function getPrefix(): string
    {
        return $this->prefix;
    }

    /**
     * Set prefix
     */
    public function setPrefix(string $prefix): void
    {
        $this->prefix = $prefix;
    }

    /**
     * Get number
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set number
     */
    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    /**
     * Get full number
     */
    public function getFullNumber(): string
    {
        return $this->prefix.$this->number;
    }

    /**
     * Set date
     */
    public function setDate(string|DateTime $date): void
    {
        $dateValidator = new DateValidator;

        $this->setIssueDate($dateValidator->getDate($date));
        $this->setIssueTime($dateValidator->getTime($date));
    }

    /**
     * Get date
     */
    public function getDate(): string
    {
        return $this->issueDate.'T'.$this->issueTime;
    }

    /**
     * Get date
     */
    public function getIssueDate(): string
    {
        return $this->issueDate;
    }

    /**
     * Set issue date
     */
    public function setIssueDate(string $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    /**
     * Get issue time
     */
    public function getIssueTime(): string
    {
        return $this->issueTime;
    }

    /**
     * Set issue time
     */
    public function setIssueTime(string $issueTime): void
    {
        $this->issueTime = $issueTime;
    }

    /**
     * Get currency
     */
    public function getCurrency(): ?Currency
    {
        return $this->currency;
    }

    /**
     * Set currency
     */
    public function setCurrency(string $currencyCode): void
    {
        $currency = (new DataLoader('currencies'))->getByCode($currencyCode);

        $this->currency = new Currency($currency);
    }

    /**
     * Get note
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Set note
     */
    public function setNote(string $note): void
    {
        $this->note = $note;
    }

    /**
     * Get period
     */
    public function getPeriod(): ?Period
    {
        return $this->period;
    }

    /**
     * Set period
     */
    public function setPeriod(array|Period $period): void
    {
        $this->period = $period instanceof Period ? $period : new Period($period);
    }

    /**
     * Get generation place
     */
    public function getGenerationPlace(): ?GenerationPlace
    {
        return $this->generationPlace;
    }

    /**
     * Set generation place
     */
    public function setGenerationPlace(array|GenerationPlace $generationPlace): void
    {
        $this->generationPlace = $generationPlace instanceof GenerationPlace ? $generationPlace : new GenerationPlace($generationPlace);
    }

    /**
     * Get provider
     */
    public function getProvider(): ?Provider
    {
        return $this->provider;
    }

    /**
     * Set provider
     */
    public function setProvider(array|Provider $provider): void
    {
        $this->provider = $provider instanceof Provider ? $provider : new Provider($provider);
    }

    /**
     * Set employer
     */
    public function setEmployer(array|Employer $employer): void
    {
        $this->employer = $employer instanceof Employer ? $employer : new Employer($employer);
    }

    /**
     * Get employer
     */
    public function getEmployer(): ?Employer
    {
        return $this->employer;
    }

    /**
     * Set employee
     */
    public function setEmployee(array|Employee $employee): void
    {
        $this->employee = $employee instanceof Employee ? $employee : new Employee($employee);
    }

    /**
     * Get employee
     */
    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    /**
     * Set payment
     */
    public function setPayment(array|PaymentPayroll $payment): void
    {
        $this->payment = $payment instanceof PaymentPayroll ? $payment : new PaymentPayroll($payment);
    }

    /**
     * Get payment
     */
    public function getPayment(): ?PaymentPayroll
    {
        return $this->payment;
    }

    /**
     * Set earnings
     */
    public function setEarnings(array|Earnings $earnings): void
    {
        $this->earnings = $earnings instanceof Earnings ? $earnings : new Earnings($earnings);
    }

    /**
     * Get earnings
     */
    public function getEarnings(): ?Earnings
    {
        return $this->earnings;
    }

    /**
     * Set deductions
     */
    public function setDeductions(array|Deductions $deductions): void
    {
        $this->deductions = $deductions instanceof Deductions ? $deductions : new Deductions($deductions);
    }

    /**
     * Get deductions
     */
    public function getDeductions(): ?Deductions
    {
        return $this->deductions;
    }

    /**
     *  Set rounding
     */
    public function setRounding(float $rounding): void
    {
        $this->rounding = $rounding;
    }

    /**
     * Get rounding
     */
    public function getRounding(): ?float
    {
        return $this->rounding;
    }

    /**
     * Set total earned
     */
    public function setTotalEarned(float $totalEarned): void
    {
        $this->totalEarned = $totalEarned;
    }

    /**
     * Get total earned
     */
    public function getTotalEarned(): ?float
    {
        return $this->totalEarned;
    }

    /**
     * Set deductions total
     */
    public function setDeductionsTotal(float $deductionsTotal): void
    {
        $this->deductionsTotal = $deductionsTotal;
    }

    /**
     * Get deductions total
     */
    public function getDeductionsTotal(): ?float
    {
        return $this->deductionsTotal;
    }

    /**
     * Set total voucher
     */
    public function setTotalVoucher(float $totalVoucher): void
    {
        $this->totalVoucher = $totalVoucher;
    }

    /**
     * Get total voucher
     */
    public function getTotalVoucher(): ?float
    {
        return $this->totalVoucher;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'environment' => $this->getEnvironment(),
            'software' => $this->getSoftware()->toArray(),
            'document_type' => $this->getDocumentType()->toArray(),
            'prefix' => $this->getPrefix(),
            'number' => $this->getNumber(),
            'full_number' => $this->getFullNumber(),
            'issue_date' => $this->getIssueDate(),
            'issue_time' => $this->getIssueTime(),
            'note' => $this->getNote(),
            'currency' => $this->getCurrency()?->toArray(),
            'period' => $this->getPeriod()?->toArray(),
            'generation_place' => $this->getGenerationPlace()?->toArray(),
            'provider' => $this->getProvider()?->toArray(),
            'employer' => $this->getEmployer()?->toArray(),
            'employee' => $this->getEmployee()?->toArray(),
            'payment' => $this->getPayment()?->toArray(),
            'earnings' => $this->getEarnings()?->toArray(),
            'deductions' => $this->getDeductions()?->toArray(),
            'rounding' => $this->getRounding(),
            'total_earned' => $this->getTotalEarned(),
            'deductions_total' => $this->getDeductionsTotal(),
            'total_voucher' => $this->getTotalVoucher(),
        ];
    }
}
