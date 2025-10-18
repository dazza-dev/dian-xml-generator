<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings;

use DazzaDev\DianXmlGenerator\Models\Payroll\Advance;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Disabilities\Disability;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Leaves\Leaves;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Overtime\Overtime;
use DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Vacations\Vacations;
use DazzaDev\DianXmlGenerator\Models\Payroll\ThirdPartyPayment;

class Earnings
{
    /**
     * Basic Earning
     */
    private ?BasicEarning $basic = null;

    /**
     * Transportation
     */
    private ?Transportation $transportation = null;

    /**
     * Overtime
     */
    private ?Overtime $overtime = null;

    /**
     * Surcharges
     */
    private ?Overtime $surcharges = null;

    /**
     * Vacations
     */
    private ?Vacations $vacations = null;

    /**
     * Service bonus
     */
    private ?ServiceBonus $serviceBonus = null;

    /**
     * Severance
     */
    private ?Severance $severance = null;

    /**
     * Disabilities
     */
    private array $disabilities = [];

    /**
     * Leaves
     */
    private ?Leaves $leaves = null;

    /**
     * Bonuses
     */
    private array $bonuses = [];

    /**
     * Assistance
     */
    private array $assistance = [];

    /**
     * Legal strikes
     */
    private array $legalStrikes = [];

    /**
     * Other concepts
     */
    private array $otherConcepts = [];

    /**
     * Compensations
     */
    private array $compensations = [];

    /**
     * Epctvs bonus
     */
    private array $epctvsBonuses = [];

    /**
     * Commissions
     */
    private array $commissions = [];

    /**
     * Third party payments
     */
    private array $thirdPartyPayments = [];

    /**
     * Advances
     */
    private array $advances = [];

    /**
     * Endowment
     */
    private ?float $endowment = null;

    /**
     * Sustaining support
     */
    private ?float $sustainingSupport = null;

    /**
     * Teleworking
     */
    private ?float $teleworking = null;

    /**
     * Withdrawal bonus
     */
    private ?float $withdrawalBonus = null;

    /**
     * Indemnification
     */
    private ?float $indemnification = null;

    /**
     * Refund
     */
    private ?float $refund = null;

    /**
     * Earnings constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize earnings data
     */
    private function initialize(array $data): void
    {
        $this->setBasic($data['basic']);

        // Transportation
        if (isset($data['transportation'])) {
            $this->setTransportation($data['transportation']);
        }

        // Overtime
        if (isset($data['overtime'])) {
            $this->setOvertime($data['overtime']);
        }

        // Surcharges
        if (isset($data['surcharges'])) {
            $this->setSurcharges($data['surcharges']);
        }

        // Vacations
        if (isset($data['vacations'])) {
            $this->setVacations($data['vacations']);
        }

        // Service bonus
        if (isset($data['service_bonus'])) {
            $this->setServiceBonus($data['service_bonus']);
        }

        // Severance
        if (isset($data['severance'])) {
            $this->setSeverance($data['severance']);
        }

        // Disabilities
        if (isset($data['disabilities'])) {
            $this->setDisabilities($data['disabilities']);
        }

        // Leaves
        if (isset($data['leaves'])) {
            $this->setLeaves($data['leaves']);
        }

        // Bonuses
        if (isset($data['bonuses'])) {
            $this->setBonuses($data['bonuses']);
        }

        // Assistance
        if (isset($data['assistance'])) {
            $this->setAssistance($data['assistance']);
        }

        // Legal strikes
        if (isset($data['legal_strikes'])) {
            $this->setLegalStrikes($data['legal_strikes']);
        }

        // Other
        if (isset($data['others'])) {
            $this->setOtherConcepts($data['others']);
        }

        // Compensations
        if (isset($data['compensations'])) {
            $this->setCompensations($data['compensations']);
        }

        // Epctvs bonus
        if (isset($data['epctvs_bonuses'])) {
            $this->setEpctvsBonuses($data['epctvs_bonuses']);
        }

        // Commissions
        if (isset($data['commissions'])) {
            $this->setCommissions($data['commissions']);
        }

        // Third party payments
        if (isset($data['third_party_payments'])) {
            $this->setThirdPartyPayments($data['third_party_payments']);
        }

        // Advances
        if (isset($data['advances'])) {
            $this->setAdvances($data['advances']);
        }

        // Endowment
        if (isset($data['endowment'])) {
            $this->setEndowment($data['endowment']);
        }

        // Sustaining support
        if (isset($data['sustaining_support'])) {
            $this->setSustainingSupport($data['sustaining_support']);
        }

        // Teleworking
        if (isset($data['teleworking'])) {
            $this->setTeleworking($data['teleworking']);
        }

        // Withdrawal bonus
        if (isset($data['withdrawal_bonus'])) {
            $this->setWithdrawalBonus($data['withdrawal_bonus']);
        }

        // Indemnification
        if (isset($data['indemnification'])) {
            $this->setIndemnification($data['indemnification']);
        }

        // Refund
        if (isset($data['refund'])) {
            $this->setRefund($data['refund']);
        }
    }

    /**
     * Get basic earnings
     */
    public function getBasic(): ?BasicEarning
    {
        return $this->basic;
    }

    /**
     * Set basic earnings
     */
    private function setBasic(array|BasicEarning $basic): void
    {
        if ($basic instanceof BasicEarning) {
            $this->basic = $basic;
        } else {
            $this->basic = new BasicEarning($basic);
        }
    }

    /**
     * Get transportation
     */
    public function getTransportation(): ?Transportation
    {
        return $this->transportation;
    }

    /**
     * Set transportation
     */
    private function setTransportation(array|Transportation $transportation): void
    {
        if ($transportation instanceof Transportation) {
            $this->transportation = $transportation;
        } else {
            $this->transportation = new Transportation($transportation);
        }
    }

    /**
     * Get overtime
     */
    public function getOvertime(): ?Overtime
    {
        return $this->overtime;
    }

    /**
     * Set overtime
     */
    private function setOvertime(array|Overtime $overtime): void
    {
        if ($overtime instanceof Overtime) {
            $this->overtime = $overtime;
        } else {
            $this->overtime = new Overtime($overtime);
        }
    }

    /**
     * Get surcharges
     */
    public function getSurcharges(): ?Overtime
    {
        return $this->surcharges;
    }

    /**
     * Set surcharges
     */
    private function setSurcharges(array|Overtime $surcharges): void
    {
        if ($surcharges instanceof Overtime) {
            $this->surcharges = $surcharges;
        } else {
            $this->surcharges = new Overtime($surcharges);
        }
    }

    /**
     * Set vacations
     */
    public function setVacations(array|Vacations $vacations): void
    {
        $this->vacations = $vacations instanceof Vacations ? $vacations : new Vacations($vacations);
    }

    /**
     * Get vacations
     */
    public function getVacations(): Vacations
    {
        return $this->vacations;
    }

    /**
     * Set service bonus
     */
    public function setServiceBonus(array|ServiceBonus $serviceBonus): void
    {
        $this->serviceBonus = $serviceBonus instanceof ServiceBonus ? $serviceBonus : new ServiceBonus($serviceBonus);
    }

    /**
     * Get service bonus
     */
    public function getServiceBonus(): ServiceBonus
    {
        return $this->serviceBonus;
    }

    /**
     * Set severance
     */
    public function setSeverance(array|Severance $severance): void
    {
        $this->severance = $severance instanceof Severance ? $severance : new Severance($severance);
    }

    /**
     * Get severance
     */
    public function getSeverance(): Severance
    {
        return $this->severance;
    }

    /**
     * Set disabilities
     */
    public function setDisabilities(array $disabilities): void
    {
        $this->disabilities = [];
        foreach ($disabilities as $disability) {
            $this->disabilities[] = $disability instanceof Disability
                ? $disability
                : new Disability($disability);
        }
    }

    /**
     * Get disabilities
     */
    public function getDisabilities(): array
    {
        return $this->disabilities;
    }

    /**
     * Set leaves
     */
    public function setLeaves(array|Leaves $leaves): void
    {
        $this->leaves = $leaves instanceof Leaves ? $leaves : new Leaves($leaves);
    }

    /**
     * Get leaves
     */
    public function getLeaves(): Leaves
    {
        return $this->leaves;
    }

    /**
     * Get bonuses
     */
    public function getBonuses(): array
    {
        return $this->bonuses;
    }

    /**
     * Set bonuses
     */
    public function setBonuses(array $bonuses): void
    {
        $this->bonuses = [];
        foreach ($bonuses as $bonus) {
            $this->bonuses[] = $bonus instanceof Bonus
                ? $bonus
                : new Bonus($bonus);
        }
    }

    /**
     * Get assistance
     */
    public function getAssistance(): array
    {
        return $this->assistance;
    }

    /**
     * Set assistance
     */
    public function setAssistance(array $assistance): void
    {
        $this->assistance = [];
        foreach ($assistance as $assistance) {
            $this->assistance[] = $assistance instanceof Assistance
                ? $assistance
                : new Assistance($assistance);
        }
    }

    /**
     * Get legal strikes
     */
    public function getLegalStrikes(): array
    {
        return $this->legalStrikes;
    }

    /**
     * Set legal strikes
     */
    public function setLegalStrikes(array $legalStrikes): void
    {
        $this->legalStrikes = [];
        foreach ($legalStrikes as $legalStrike) {
            $this->legalStrikes[] = $legalStrike instanceof LegalStrike
                ? $legalStrike
                : new LegalStrike($legalStrike);
        }
    }

    /**
     * Get other concepts
     */
    public function getOtherConcepts(): array
    {
        return $this->otherConcepts;
    }

    /**
     * Set other concepts
     */
    public function setOtherConcepts(array $otherConcepts): void
    {
        $this->otherConcepts = [];
        foreach ($otherConcepts as $otherConcept) {
            $this->otherConcepts[] = $otherConcept instanceof Other
                ? $otherConcept
                : new Other($otherConcept);
        }
    }

    /**
     * Get compensations
     */
    public function getCompensations(): array
    {
        return $this->compensations;
    }

    /**
     * Set compensations
     */
    public function setCompensations(array $compensations): void
    {
        $this->compensations = [];
        foreach ($compensations as $compensation) {
            $this->compensations[] = $compensation instanceof Compensation
                ? $compensation
                : new Compensation($compensation);
        }
    }

    /**
     * Get EPCTVs bonuses
     */
    public function getEpctvsBonuses(): array
    {
        return $this->epctvsBonuses;
    }

    /**
     * Set EPCTVs bonuses
     */
    public function setEpctvsBonuses(array $epctvsBonuses): void
    {
        $this->epctvsBonuses = [];
        foreach ($epctvsBonuses as $epctvsBonus) {
            $this->epctvsBonuses[] = $epctvsBonus instanceof EpctvBonus
                ? $epctvsBonus
                : new EpctvBonus($epctvsBonus);
        }
    }

    /**
     * Get commissions
     */
    public function getCommissions(): array
    {
        return $this->commissions;
    }

    /**
     * Set commissions
     */
    public function setCommissions(array $commissions): void
    {
        $this->commissions = [];
        foreach ($commissions as $commission) {
            $this->commissions[] = $commission instanceof Commission
                ? $commission
                : new Commission($commission);
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
     * Get endowment
     */
    public function getEndowment(): ?float
    {
        return $this->endowment;
    }

    /**
     * Set endowment
     */
    public function setEndowment(float $endowment): void
    {
        $this->endowment = $endowment;
    }

    /**
     * Get sustaining support
     */
    public function getSustainingSupport(): ?float
    {
        return $this->sustainingSupport;
    }

    /**
     * Set sustaining support
     */
    public function setSustainingSupport(float $sustainingSupport): void
    {
        $this->sustainingSupport = $sustainingSupport;
    }

    /**
     * Get teleworking
     */
    public function getTeleworking(): ?float
    {
        return $this->teleworking;
    }

    /**
     * Set teleworking
     */
    public function setTeleworking(float $teleworking): void
    {
        $this->teleworking = $teleworking;
    }

    /**
     * Get withdrawal bonus
     */
    public function getWithdrawalBonus(): ?float
    {
        return $this->withdrawalBonus;
    }

    /**
     * Set withdrawal bonus
     */
    public function setWithdrawalBonus(float $withdrawalBonus): void
    {
        $this->withdrawalBonus = $withdrawalBonus;
    }

    /**
     * Get indemnification
     */
    public function getIndemnification(): ?float
    {
        return $this->indemnification;
    }

    /**
     * Set indemnification
     */
    public function setIndemnification(float $indemnification): void
    {
        $this->indemnification = $indemnification;
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
    public function setRefund(float $refund): void
    {
        $this->refund = $refund;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'basic' => $this->getBasic()?->toArray(),
            'transportation' => $this->getTransportation()?->toArray(),
            'overtime' => $this->getOvertime()?->toArray(),
            'surcharges' => $this->getSurcharges()?->toArray(),
            'vacations' => $this->getVacations()?->toArray(),
            'service_bonus' => $this->getServiceBonus()?->toArray(),
            'severance' => $this->getSeverance()?->toArray(),
            'disabilities' => array_map(fn (Disability $disability) => $disability->toArray(), $this->getDisabilities()),
            'leaves' => $this->getLeaves()?->toArray(),
            'bonuses' => array_map(fn (Bonus $bonus) => $bonus->toArray(), $this->getBonuses()),
            'assistance' => array_map(fn (Assistance $assistance) => $assistance->toArray(), $this->getAssistance()),
            'legal_strikes' => array_map(fn (LegalStrike $legalStrike) => $legalStrike->toArray(), $this->getLegalStrikes()),
            'others' => array_map(fn (Other $other) => $other->toArray(), $this->getOtherConcepts()),
            'compensations' => array_map(fn (Compensation $compensation) => $compensation->toArray(), $this->getCompensations()),
            'epctvs_bonuses' => array_map(fn (EpctvBonus $epctvBonus) => $epctvBonus->toArray(), $this->getEpctvsBonuses()),
            'commissions' => array_map(fn (Commission $commission) => $commission->toArray(), $this->getCommissions()),
            'third_party_payments' => array_map(fn (ThirdPartyPayment $thirdPartyPayment) => $thirdPartyPayment->toArray(), $this->getThirdPartyPayments()),
            'advances' => array_map(fn (Advance $advance) => $advance->toArray(), $this->getAdvances()),
            'endowment' => $this->getEndowment(),
            'sustaining_support' => $this->getSustainingSupport(),
            'teleworking' => $this->getTeleworking(),
            'withdrawal_bonus' => $this->getWithdrawalBonus(),
            'indemnification' => $this->getIndemnification(),
            'refund' => $this->getRefund(),
        ];
    }
}
