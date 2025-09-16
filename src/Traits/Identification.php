<?php

namespace DazzaDev\DianXmlGenerator\Traits;

use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\Models\Entities\IdentificationType;
use Rmunate\DianColombia\DIAN;

trait Identification
{
    /**
     * Identification type
     */
    private IdentificationType $identificationType;

    /**
     * Identification number
     */
    private string $identificationNumber;

    /**
     * Verification code
     */
    private int $verificationCode;

    /**
     * Get identification type
     */
    public function getIdentificationType(): IdentificationType
    {
        return $this->identificationType;
    }

    /**
     * Set identification type
     */
    public function setIdentificationType(int|string $identificationTypeCode): void
    {
        $identificationType = (new DataLoader('identification-types'))->getByCode($identificationTypeCode);

        $this->identificationType = new IdentificationType($identificationType);
    }

    /**
     * Get identification number
     */
    public function getIdentificationNumber(): string
    {
        return $this->identificationNumber;
    }

    /**
     * Set identification number
     */
    public function setIdentificationNumber(string $identificationNumber): void
    {
        $this->identificationNumber = $identificationNumber;

        // Calculate verification code
        $this->verificationCode = DIAN::digitoVerificacion((int) $this->identificationNumber);
    }

    /**
     * Get verification code
     */
    public function getVerificationCode(): int
    {
        return $this->verificationCode;
    }
}
