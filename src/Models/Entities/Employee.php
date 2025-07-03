<?php

namespace DazzaDev\DianXmlGenerator\Models\Entities;

use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\Models\Payroll\ContractType;
use DazzaDev\DianXmlGenerator\Models\Payroll\Worker\WorkerSubType;
use DazzaDev\DianXmlGenerator\Models\Payroll\Worker\WorkerType;

class Employee extends EntityPayroll
{
    /**
     * Worker code
     */
    private ?string $workerCode = null;

    /**
     * Worker type
     */
    private ?WorkerType $workerType = null;

    /**
     * Worker subtype
     */
    private ?WorkerSubType $workerSubtype = null;

    /**
     * Contract type
     */
    private ?ContractType $contractType = null;

    /**
     * Salary amount
     */
    private float $salary;

    /**
     * High risk pension
     */
    private bool $highRiskPension = false;

    /**
     * Integral salary
     */
    private bool $integralSalary = false;

    /**
     * Employee constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        // Initialize
        $this->initialize($data);
    }

    /**
     * Initialize employee data
     */
    private function initialize(array $data): void
    {
        if (empty($data)) {
            return;
        }

        // Worker code
        if (isset($data['worker_code'])) {
            $this->setWorkerCode($data['worker_code']);
        }

        // Worker type
        if (isset($data['worker_type'])) {
            $this->setWorkerType($data['worker_type']);
        }

        // Worker subtype
        if (isset($data['worker_subtype'])) {
            $this->setWorkerSubtype($data['worker_subtype']);
        }

        // Contract type
        if (isset($data['contract_type'])) {
            $this->setContractType($data['contract_type']);
        }

        // Salary
        if (isset($data['salary'])) {
            $this->setSalary($data['salary']);
        }

        // High risk pension
        if (isset($data['high_risk_pension'])) {
            $this->setHighRiskPension($data['high_risk_pension']);
        }

        // Integral salary
        if (isset($data['integral_salary'])) {
            $this->setIntegralSalary($data['integral_salary']);
        }
    }

    /**
     * Get worker code
     */
    public function getWorkerCode(): ?string
    {
        return $this->workerCode;
    }

    /**
     * Set worker code
     */
    public function setWorkerCode(string $workerCode): void
    {
        $this->workerCode = $workerCode;
    }

    /**
     * Get worker type
     */
    public function getWorkerType(): ?WorkerType
    {
        return $this->workerType;
    }

    /**
     * Set worker type
     */
    public function setWorkerType(string $workerTypeCode): void
    {
        $workerType = (new DataLoader('worker-types'))->getByCode($workerTypeCode);

        $this->workerType = new WorkerType($workerType);
    }

    /**
     * Get worker subtype
     */
    public function getWorkerSubtype(): ?WorkerSubType
    {
        return $this->workerSubtype;
    }

    /**
     * Set worker subtype
     */
    public function setWorkerSubtype(string $workerSubtypeCode): void
    {
        $workerSubtype = (new DataLoader('worker-subtypes'))->getByCode($workerSubtypeCode);

        $this->workerSubtype = new WorkerSubType($workerSubtype);
    }

    /**
     * Get the contract
     */
    public function getContractType(): ?ContractType
    {
        return $this->contractType;
    }

    /**
     * Set the contract
     */
    public function setContractType(string $contractCode): void
    {
        $contract = (new DataLoader('contract-types'))->getByCode($contractCode);

        $this->contractType = new ContractType($contract);
    }

    /**
     * Get salary
     */
    public function getSalary(): float
    {
        return $this->salary;
    }

    /**
     * Set salary
     */
    public function setSalary(float $salary): void
    {
        $this->salary = $salary;
    }

    /**
     * Get high risk pension
     */
    public function getHighRiskPension(): bool
    {
        return $this->highRiskPension;
    }

    /**
     * Set high risk pension
     */
    public function setHighRiskPension(bool $highRiskPension): void
    {
        $this->highRiskPension = $highRiskPension;
    }

    /**
     * Get integral salary
     */
    public function getIntegralSalary(): bool
    {
        return $this->integralSalary;
    }

    /**
     * Set integral salary
     */
    public function setIntegralSalary(bool $integralSalary): void
    {
        $this->integralSalary = $integralSalary;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray() + [
            'worker_code' => $this->getWorkerCode(),
            'worker_type' => $this->getWorkerType()->toArray(),
            'worker_subtype' => $this->getWorkerSubtype()->toArray(),
            'contract_type' => $this->getContractType()->toArray(),
            'salary' => $this->getSalary(),
            'high_risk_pension' => $this->getHighRiskPension(),
            'integral_salary' => $this->getIntegralSalary(),
        ];
    }
}
