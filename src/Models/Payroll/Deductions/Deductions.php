<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Deductions;

use DazzaDev\DianXmlGenerator\Models\Payroll\Advance;
use DazzaDev\DianXmlGenerator\Models\Payroll\ThirdPartyPayment;

class Deductions
{
    /**
     * Health
     */
    private ?Health $health = null;

    /**
     * Pension fund
     */
    private ?PensionFund $pensionFund = null;

    /**
     * Pension security fund
     */
    private ?PensionSecurityFund $pensionSecurityFund = null;

    /**
     * Labor unions
     */
    private array $laborUnions = [];

    /**
     * Penalties
     */
    private array $penalties = [];

    /**
     * Wage assignments
     */
    private array $wageAssignments = [];

    /**
     * Third party payments
     */
    private array $thirdPartyPayments = [];

    /**
     * Advances
     */
    private array $advances = [];

    /**
     * Other deductions
     */
    private array $otherDeductions = [];

    /**
     * Voluntary Pension
     */
    private ?float $voluntaryPension = null;

    /**
     * Retefuente
     */
    private ?float $retefuente = null;

    /**
     * AFC
     */
    private ?float $afc = null;

    /**
     * Cooperative
     */
    private ?float $cooperative = null;

    /**
     * Tax Garnishment
     */
    private ?float $taxGarnishment = null;

    /**
     * Complementary Plan
     */
    private ?float $complementaryPlan = null;

    /**
     * Education
     */
    private ?float $education = null;

    /**
     * Refund
     */
    private ?float $refund = null;

    /**
     * Debt
     */
    private ?float $debt = null;

    /**
     * Deductions constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize deductions data
     */
    private function initialize(array $data): void
    {
        $this->setHealth($data['health']);
        $this->setPensionFund($data['pension_fund']);

        // Pension security fund
        if (isset($data['pension_security_fund'])) {
            $this->setPensionSecurityFund($data['pension_security_fund']);
        }

        // Labor unions
        if (isset($data['labor_unions'])) {
            $this->setLaborUnions($data['labor_unions']);
        }

        // Penalties
        if (isset($data['penalties'])) {
            $this->setPenalties($data['penalties']);
        }

        // Wage assignments
        if (isset($data['wage_assignments'])) {
            $this->setWageAssignments($data['wage_assignments']);
        }

        // Third party payments
        if (isset($data['third_party_payments'])) {
            $this->setThirdPartyPayments($data['third_party_payments']);
        }

        // Advances
        if (isset($data['advances'])) {
            $this->setAdvances($data['advances']);
        }

        // Other deductions
        if (isset($data['others'])) {
            $this->setOtherDeductions($data['others']);
        }

        // Voluntary Pension
        if (isset($data['voluntary_pension'])) {
            $this->setVoluntaryPension($data['voluntary_pension']);
        }

        // Retefuente
        if (isset($data['retefuente'])) {
            $this->setRetefuente($data['retefuente']);
        }

        // AFC
        if (isset($data['afc'])) {
            $this->setAfc($data['afc']);
        }

        // Cooperative
        if (isset($data['cooperative'])) {
            $this->setCooperative($data['cooperative']);
        }

        // Tax garnishment
        if (isset($data['tax_garnishment'])) {
            $this->setTaxGarnishment($data['tax_garnishment']);
        }

        // Complementary plan
        if (isset($data['complementary_plan'])) {
            $this->setComplementaryPlan($data['complementary_plan']);
        }

        // Education
        if (isset($data['education'])) {
            $this->setEducation($data['education']);
        }

        // Refund
        if (isset($data['refund'])) {
            $this->setRefund($data['refund']);
        }

        // Debt
        if (isset($data['debt'])) {
            $this->setDebt($data['debt']);
        }
    }

    /**
     * Get health
     */
    public function getHealth(): ?Health
    {
        return $this->health;
    }

    /**
     * Set health
     */
    private function setHealth(array|Health $health): void
    {
        if ($health instanceof Health) {
            $this->health = $health;
        } else {
            $this->health = new Health($health);
        }
    }

    /**
     * Get pension fund
     */
    public function getPensionFund(): ?PensionFund
    {
        return $this->pensionFund;
    }

    /**
     * Set pension fund
     */
    private function setPensionFund(array|PensionFund $pensionFund): void
    {
        if ($pensionFund instanceof PensionFund) {
            $this->pensionFund = $pensionFund;
        } else {
            $this->pensionFund = new PensionFund($pensionFund);
        }
    }

    /**
     * Get pension security fund
     */
    public function getPensionSecurityFund(): ?PensionSecurityFund
    {
        return $this->pensionSecurityFund;
    }

    /**
     * Set pension security fund
     */
    private function setPensionSecurityFund(array|PensionSecurityFund $pensionSecurityFund): void
    {
        if ($pensionSecurityFund instanceof PensionSecurityFund) {
            $this->pensionSecurityFund = $pensionSecurityFund;
        } else {
            $this->pensionSecurityFund = new PensionSecurityFund($pensionSecurityFund);
        }
    }

    /**
     * Get labor unions
     */
    public function getLaborUnions(): array
    {
        return $this->laborUnions;
    }

    /**
     * Set labor unions
     */
    public function setLaborUnions(array $laborUnions): void
    {
        $this->laborUnions = [];
        foreach ($laborUnions as $laborUnion) {
            $this->laborUnions[] = $laborUnion instanceof LaborUnion
                ? $laborUnion
                : new LaborUnion($laborUnion);
        }
    }

    /**
     * Get penalties
     */
    public function getPenalties(): array
    {
        return $this->penalties;
    }

    /**
     * Set penalties
     */
    public function setPenalties(array $penalties): void
    {
        $this->penalties = [];
        foreach ($penalties as $penalty) {
            $this->penalties[] = $penalty instanceof Penalty
                ? $penalty
                : new Penalty($penalty);
        }
    }

    /**
     * Get wage assignments
     */
    public function getWageAssignments(): array
    {
        return $this->wageAssignments;
    }

    /**
     * Set wage assignments
     */
    public function setWageAssignments(array $wageAssignments): void
    {
        $this->wageAssignments = [];
        foreach ($wageAssignments as $wageAssignment) {
            $this->wageAssignments[] = $wageAssignment instanceof WageAssignment
                ? $wageAssignment
                : new WageAssignment($wageAssignment);
        }
    }

    /**
     * Get third party payments
     */
    public function getThirdPartyPayments(): array
    {
        return $this->thirdPartyPayments;
    }

    /**
     * Set third party payments
     */
    public function setThirdPartyPayments(array $thirdPartyPayments): void
    {
        $this->thirdPartyPayments = [];
        foreach ($thirdPartyPayments as $thirdPartyPayment) {
            $this->thirdPartyPayments[] = $thirdPartyPayment instanceof ThirdPartyPayment
                ? $thirdPartyPayment
                : new ThirdPartyPayment($thirdPartyPayment);
        }
    }

    /**
     * Get advances
     */
    public function getAdvances(): array
    {
        return $this->advances;
    }

    /**
     * Set advances
     */
    public function setAdvances(array $advances): void
    {
        $this->advances = [];
        foreach ($advances as $advance) {
            $this->advances[] = $advance instanceof Advance
                ? $advance
                : new Advance($advance);
        }
    }

    /**
     * Get other deductions
     */
    public function getOtherDeductions(): array
    {
        return $this->otherDeductions;
    }

    /**
     * Set other deductions
     */
    public function setOtherDeductions(array $otherDeductions): void
    {
        $this->otherDeductions = [];
        foreach ($otherDeductions as $otherDeduction) {
            $this->otherDeductions[] = $otherDeduction instanceof Other
                ? $otherDeduction
                : new Other($otherDeduction);
        }
    }

    /**
     * Get voluntary pension
     */
    public function getVoluntaryPension(): ?float
    {
        return $this->voluntaryPension;
    }

    /**
     * Set voluntary pension
     */
    private function setVoluntaryPension(float $voluntaryPension): void
    {
        $this->voluntaryPension = $voluntaryPension;
    }

    /**
     * Get retefuente
     */
    public function getRetefuente(): ?float
    {
        return $this->retefuente;
    }

    /**
     * Set retefuente
     */
    private function setRetefuente(float $retefuente): void
    {
        $this->retefuente = $retefuente;
    }

    /**
     * Get AFC
     */
    public function getAfc(): ?float
    {
        return $this->afc;
    }

    /**
     * Set AFC
     */
    private function setAfc(float $afc): void
    {
        $this->afc = $afc;
    }

    /**
     * Get cooperative
     */
    public function getCooperative(): ?float
    {
        return $this->cooperative;
    }

    /**
     * Set cooperative
     */
    private function setCooperative(float $cooperative): void
    {
        $this->cooperative = $cooperative;
    }

    /**
     * Get tax garnishment
     */
    public function getTaxGarnishment(): ?float
    {
        return $this->taxGarnishment;
    }

    /**
     * Set tax garnishment
     */
    private function setTaxGarnishment(float $taxGarnishment): void
    {
        $this->taxGarnishment = $taxGarnishment;
    }

    /**
     * Get complementary plan
     */
    public function getComplementaryPlan(): ?float
    {
        return $this->complementaryPlan;
    }

    /**
     * Set complementary plan
     */
    private function setComplementaryPlan(float $complementaryPlan): void
    {
        $this->complementaryPlan = $complementaryPlan;
    }

    /**
     * Get education
     */
    public function getEducation(): ?float
    {
        return $this->education;
    }

    /**
     * Set education
     */
    private function setEducation(float $education): void
    {
        $this->education = $education;
    }

    /**
     * Get refund
     */
    public function getRefund(): ?float
    {
        return $this->refund;
    }

    /**
     * Set refund
     */
    private function setRefund(float $refund): void
    {
        $this->refund = $refund;
    }

    /**
     * Get debt
     */
    public function getDebt(): ?float
    {
        return $this->debt;
    }

    /**
     * Set debt
     */
    private function setDebt(float $debt): void
    {
        $this->debt = $debt;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'health' => $this->getHealth()?->toArray(),
            'pension_fund' => $this->getPensionFund()?->toArray(),
            'pension_security_fund' => $this->getPensionSecurityFund()?->toArray(),
            'labor_unions' => array_map(fn (LaborUnion $laborUnion) => $laborUnion->toArray(), $this->getLaborUnions()),
            'penalties' => array_map(fn (Penalty $penalty) => $penalty->toArray(), $this->getPenalties()),
            'wage_assignments' => array_map(fn (WageAssignment $wageAssignment) => $wageAssignment->toArray(), $this->getWageAssignments()),
            'third_party_payments' => array_map(fn (ThirdPartyPayment $thirdPartyPayment) => $thirdPartyPayment->toArray(), $this->getThirdPartyPayments()),
            'advances' => array_map(fn (Advance $advance) => $advance->toArray(), $this->getAdvances()),
            'others' => array_map(fn (Other $other) => $other->toArray(), $this->getOtherDeductions()),
            'voluntary_pension' => $this->getVoluntaryPension(),
            'retefuente' => $this->getRetefuente(),
            'afc' => $this->getAfc(),
            'cooperative' => $this->getCooperative(),
            'tax_garnishment' => $this->getTaxGarnishment(),
            'complementary_plan' => $this->getComplementaryPlan(),
            'education' => $this->getEducation(),
            'refund' => $this->getRefund(),
            'debt' => $this->getDebt(),
        ];
    }
}
