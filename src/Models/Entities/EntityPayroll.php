<?php

namespace DazzaDev\DianXmlGenerator\Models\Entities;

use DazzaDev\DianXmlGenerator\Traits\Geography;

class EntityPayroll extends EntityBase
{
    use Geography;

    /**
     * Company name
     */
    private ?string $companyName = null;

    /**
     * First name
     */
    private ?string $firstName = null;

    /**
     * Other names
     */
    private ?string $otherNames = null;

    /**
     * First surname
     */
    private ?string $firstSurname = null;

    /**
     * Second surname
     */
    private ?string $secondSurname = null;

    /**
     * Period constructor
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);

        $this->initialize($data);
    }

    /**
     * Initialize period data
     */
    private function initialize(array $data): void
    {
        if (empty($data)) {
            return;
        }

        if (isset($data['company_name'])) {
            $this->setCompanyName($data['company_name']);
        }

        if (isset($data['first_name'])) {
            $this->setFirstName($data['first_name']);
        }

        if (isset($data['other_names'])) {
            $this->setOtherNames($data['other_names']);
        }

        if (isset($data['first_surname'])) {
            $this->setFirstSurname($data['first_surname']);
        }

        if (isset($data['second_surname'])) {
            $this->setSecondSurname($data['second_surname']);
        }
    }

    /**
     * Get company name
     */
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * Set company name
     */
    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    /**
     * Get first name
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Set first name
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * Get other names
     */
    public function getOtherNames(): ?string
    {
        return $this->otherNames;
    }

    /**
     * Set other names
     */
    public function setOtherNames(string $otherNames): void
    {
        $this->otherNames = $otherNames;
    }

    /**
     * Get first surname
     */
    public function getFirstSurname(): ?string
    {
        return $this->firstSurname;
    }

    /**
     * Set first surname
     */
    public function setFirstSurname(string $firstSurname): void
    {
        $this->firstSurname = $firstSurname;
    }

    /**
     * Get second surname
     */
    public function getSecondSurname(): ?string
    {
        return $this->secondSurname;
    }

    /**
     * Set second surname
     */
    public function setSecondSurname(string $secondSurname): void
    {
        $this->secondSurname = $secondSurname;
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return parent::toArray() + [
            'company_name' => $this->companyName,
            'first_name' => $this->firstName,
            'other_names' => $this->otherNames,
            'first_surname' => $this->firstSurname,
            'second_surname' => $this->secondSurname,
            'address' => $this->address?->toArray(),
            'city' => $this->city?->toArray(),
            'state' => $this->state?->toArray(),
            'country' => $this->country?->toArray(),
        ];
    }
}
