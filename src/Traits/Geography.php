<?php

namespace DazzaDev\DianXmlGenerator\Traits;

use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\Models\Geography\Address;
use DazzaDev\DianXmlGenerator\Models\Geography\City;
use DazzaDev\DianXmlGenerator\Models\Geography\Country;
use DazzaDev\DianXmlGenerator\Models\Geography\State;

trait Geography
{
    /**
     * Address
     */
    private ?Address $address = null;

    /**
     * City
     */
    private ?City $city = null;

    /**
     * State
     */
    private ?State $state = null;

    /**
     * Country
     */
    private ?Country $country = null;

    /**
     * Get address
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }

    /**
     * Set address
     */
    public function setAddress(string $address): void
    {
        $this->address = new Address(['addressLine' => $address]);
    }

    /**
     * Get city
     */
    public function getCity(): ?City
    {
        return $this->city;
    }

    /**
     * Set city
     */
    public function setCity(string $cityCode): void
    {
        $city = (new DataLoader('municipalities'))->getByCode($cityCode);

        $this->city = new City($city);
    }

    /**
     * Get state
     */
    public function getState(): ?State
    {
        return $this->state;
    }

    /**
     * Set state
     */
    public function setState(string $stateCode): void
    {
        $state = (new DataLoader('states'))->getByCode($stateCode);

        $this->state = new State($state);
    }

    /**
     * Get country
     */
    public function getCountry(): ?Country
    {
        return $this->country;
    }

    /**
     * Set country
     */
    public function setCountry(string $countryCode): void
    {
        $country = (new DataLoader('countries'))->getByCode($countryCode);

        $this->country = new Country($country);
    }
}
