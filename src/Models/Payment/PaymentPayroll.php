<?php

namespace DazzaDev\DianXmlGenerator\Models\Payment;

use DazzaDev\DianXmlGenerator\DataLoader;
use DazzaDev\DianXmlGenerator\DateValidator;

class PaymentPayroll
{
    /**
     * Bank name
     */
    private ?string $bankName = null;

    /**
     * Account type
     */
    private ?string $accountType = null;

    /**
     * Account number
     */
    private ?string $accountNumber = null;

    /**
     * Payment method
     */
    private PaymentMethod $paymentMethod;

    /**
     * Payment mean
     */
    private PaymentMean $paymentMean;

    /**
     * Payment dates
     */
    private array $dates = [];

    /**
     * Payment constructor
     */
    public function __construct(array $data = [])
    {
        if (empty($data)) {
            return;
        }

        // Bank name
        if (isset($data['bank_name'])) {
            $this->setBankName($data['bank_name']);
        }

        // Account type
        if (isset($data['account_type'])) {
            $this->setAccountType($data['account_type']);
        }

        // Account number
        if (isset($data['account_number'])) {
            $this->setAccountNumber($data['account_number']);
        }

        // Payment method
        $this->setPaymentMethod($data['payment_method']);

        // Payment mean
        $this->setPaymentMean($data['payment_mean']);

        // Payment dates
        if (isset($data['dates'])) {
            $this->setDates($data['dates']);
        }
    }

    /**
     * Get bank name
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * Set bank name
     */
    public function setBankName(string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * Get account type
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * Set account type
     */
    public function setAccountType(string $accountType): void
    {
        $this->accountType = $accountType;
    }

    /**
     * Get account number
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Set account number
     */
    public function setAccountNumber(string $accountNumber): void
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     * Get payment method
     */
    public function getPaymentMethod(): PaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * Set payment method
     */
    public function setPaymentMethod(string $paymentMethod): void
    {
        $paymentMethod = (new DataLoader('payment-methods'))->getByCode($paymentMethod);

        $this->paymentMethod = new PaymentMethod($paymentMethod);
    }

    /**
     * Get payment mean
     */
    public function getPaymentMean(): PaymentMean
    {
        return $this->paymentMean;
    }

    /**
     * Set payment mean
     */
    public function setPaymentMean(string $paymentMean): void
    {
        $paymentMean = (new DataLoader('payment-means'))->getByCode($paymentMean);

        $this->paymentMean = new PaymentMean($paymentMean);
    }

    /**
     * Get payment dates
     */
    public function getDates(): array
    {
        return $this->dates;
    }

    /**
     * Set payment dates
     */
    public function setDates(array $dates): void
    {
        $validator = new DateValidator;

        foreach ($dates as $key => $date) {
            if (! $validator->isValidDateFormat($date)) {
                throw new \InvalidArgumentException('Date must be in Y-m-d format but got: '.$date);
            }

            $this->dates[$key] = $date;
        }
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'bank_name' => $this->bankName,
            'account_type' => $this->accountType,
            'account_number' => $this->accountNumber,
            'payment_method' => $this->paymentMethod->toArray(),
            'payment_mean' => $this->paymentMean->toArray(),
            'dates' => $this->dates,
        ];
    }
}
