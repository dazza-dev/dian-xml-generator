<?php

namespace DazzaDev\DianXmlGenerator\Builders;

use DazzaDev\DianXmlGenerator\Enums\Environments;
use DazzaDev\DianXmlGenerator\Models\Entities\Employee;
use DazzaDev\DianXmlGenerator\Models\Entities\Employer;
use DazzaDev\DianXmlGenerator\Models\Entities\Provider;
use DazzaDev\DianXmlGenerator\Models\Payroll\AdjustmentNote;
use DazzaDev\DianXmlGenerator\Models\Payroll\Payroll;
use DazzaDev\DianXmlGenerator\XmlHelper;
use DOMDocument;
use InvalidArgumentException;

class PayrollBuilder
{
    private string $payrollType;

    private array $payrollData;

    private Payroll|AdjustmentNote $payroll;

    public function __construct(string $payrollType, array $payrollData, string|int $environment, array $software)
    {
        $this->payrollType = $payrollType;
        $this->payrollData = $payrollData;

        // Determine the payroll type
        $this->payroll = $this->payrollModel();

        // Environment
        $this->payroll->setEnvironment(Environments::from($environment));

        // Software
        $this->payroll->setSoftware($software);

        // Adjustment note type
        if ($this->payrollType == 'adjustment-note') {
            $this->payroll->setAdjustmentNoteType($this->payrollData['type']);
            $this->payroll->setPredecessor($this->payrollData['predecessor']);
        }

        // Payroll Data
        $this->payroll->setPrefix($this->payrollData['prefix']);
        $this->payroll->setNumber($this->payrollData['number']);
        $this->payroll->setDate($this->payrollData['date']);

        // Currency
        if (isset($this->payrollData['currency'])) {
            $this->payroll->setCurrency($this->payrollData['currency']);
        }

        // Note
        if (isset($this->payrollData['note'])) {
            $this->payroll->setNote($this->payrollData['note']);
        }

        // Novelty
        if (isset($this->payrollData['novelty'])) {
            $this->payroll->setNovelty($this->payrollData['novelty']);
        }

        // Novelty identifier
        if (isset($this->payrollData['novelty_identifier'])) {
            $this->payroll->setNoveltyIdentifier($this->payrollData['novelty_identifier']);
        }

        // Period
        if (isset($this->payrollData['period'])) {
            $this->payroll->setPeriod($this->payrollData['period']);
        }

        // Generation place
        $this->payroll->setGenerationPlace($this->payrollData['generation_place']);

        // Provider or employer
        $this->setProviderOrEmployer('provider');
        $this->setProviderOrEmployer('employer');

        // Worker
        if (isset($this->payrollData['employee'])) {
            $this->setEmployee();
        }

        // Payment
        if (isset($this->payrollData['payment'])) {
            $this->payroll->setPayment($this->payrollData['payment']);
        }

        // Earnings
        if (isset($this->payrollData['earnings'])) {
            $this->payroll->setEarnings($this->payrollData['earnings']);
        }

        // Deductions
        if (isset($this->payrollData['deductions'])) {
            $this->payroll->setDeductions($this->payrollData['deductions']);
        }

        // Total
        if (isset($this->payrollData['rounding'])) {
            $this->payroll->setRounding($this->payrollData['rounding']);
        }
        if (isset($this->payrollData['total_earned'])) {
            $this->payroll->setTotalEarned($this->payrollData['total_earned']);
        }
        if (isset($this->payrollData['deductions_total'])) {
            $this->payroll->setDeductionsTotal($this->payrollData['deductions_total']);
        }
        if (isset($this->payrollData['total_voucher'])) {
            $this->payroll->setTotalVoucher($this->payrollData['total_voucher']);
        }
    }

    /**
     * Get payroll model
     */
    private function payrollModel(): Payroll|AdjustmentNote
    {
        return match ($this->payrollType) {
            'individual' => new Payroll,
            'adjustment-note' => new AdjustmentNote,
            default => throw new InvalidArgumentException("Invalid payroll type: $this->payrollType"),
        };
    }

    /**
     * Get payroll
     */
    public function getPayroll(): Payroll|AdjustmentNote
    {
        return $this->payroll;
    }

    /**
     * Get payroll XML
     */
    public function getXml(): DOMDocument
    {
        return (new XmlHelper)->getXml($this->payrollType.'-payroll', $this->payroll->toArray());
    }

    /**
     * Set provider or employer
     */
    public function setProviderOrEmployer(string $type)
    {
        $provider = match ($type) {
            'provider' => new Provider,
            'employer' => new Employer,
            default => throw new InvalidArgumentException("Invalid payroll type: $this->payrollType"),
        };

        $provider->setIdentificationType($this->payrollData['company']['identification_type']);
        $provider->setIdentificationNumber($this->payrollData['company']['identification_number']);
        $provider->setCompanyName($this->payrollData['company']['company_name']);

        if (isset($this->payrollData['company']['first_name'])) {
            $provider->setFirstName($this->payrollData['company']['first_name']);
        }

        if (isset($this->payrollData['company']['other_names'])) {
            $provider->setOtherNames($this->payrollData['company']['other_names']);
        }

        if (isset($this->payrollData['company']['first_surname'])) {
            $provider->setFirstSurname($this->payrollData['company']['first_surname']);
        }

        if (isset($this->payrollData['company']['second_surname'])) {
            $provider->setSecondSurname($this->payrollData['company']['second_surname']);
        }

        if (isset($this->payrollData['company']['country'])) {
            $provider->setCountry($this->payrollData['company']['country']);
        }

        if (isset($this->payrollData['company']['state'])) {
            $provider->setState($this->payrollData['company']['state']);
        }

        if (isset($this->payrollData['company']['city'])) {
            $provider->setCity($this->payrollData['company']['city']);
        }

        if (isset($this->payrollData['company']['address'])) {
            $provider->setAddress($this->payrollData['company']['address']);
        }

        if ($type === 'provider') {
            $this->payroll->setProvider($provider);
        } else {
            $this->payroll->setEmployer($provider);
        }
    }

    /**
     * Set employee
     */
    public function setEmployee()
    {
        $employee = new Employee;

        // Worker Information
        $employee->setWorkerType($this->payrollData['employee']['worker_type']);
        $employee->setWorkerSubtype($this->payrollData['employee']['worker_subtype']);
        $employee->setContractType($this->payrollData['employee']['contract_type']);
        $employee->setSalary($this->payrollData['employee']['salary']);

        if (isset($this->payrollData['employee']['high_risk_pension'])) {
            $employee->setHighRiskPension($this->payrollData['employee']['high_risk_pension']);
        }

        if (isset($this->payrollData['employee']['integral_salary'])) {
            $employee->setIntegralSalary($this->payrollData['employee']['integral_salary']);
        }

        // Identification
        $employee->setIdentificationType($this->payrollData['employee']['identification_type']);
        $employee->setIdentificationNumber($this->payrollData['employee']['identification_number']);

        if (isset($this->payrollData['employee']['worker_code'])) {
            $employee->setWorkerCode($this->payrollData['employee']['worker_code']);
        }

        if (isset($this->payrollData['employee']['first_name'])) {
            $employee->setFirstName($this->payrollData['employee']['first_name']);
        }

        if (isset($this->payrollData['employee']['other_names'])) {
            $employee->setOtherNames($this->payrollData['employee']['other_names']);
        }

        if (isset($this->payrollData['employee']['first_surname'])) {
            $employee->setFirstSurname($this->payrollData['employee']['first_surname']);
        }

        if (isset($this->payrollData['employee']['second_surname'])) {
            $employee->setSecondSurname($this->payrollData['employee']['second_surname']);
        }

        if (isset($this->payrollData['employee']['country'])) {
            $employee->setCountry($this->payrollData['employee']['country']);
        }

        if (isset($this->payrollData['employee']['state'])) {
            $employee->setState($this->payrollData['employee']['state']);
        }

        if (isset($this->payrollData['employee']['city'])) {
            $employee->setCity($this->payrollData['employee']['city']);
        }

        if (isset($this->payrollData['employee']['address'])) {
            $employee->setAddress($this->payrollData['employee']['address']);
        }

        $this->payroll->setEmployee($employee);
    }
}
