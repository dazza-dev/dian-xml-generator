<?php

namespace DazzaDev\DianXmlGenerator;

use DateTime;
use DateTimeZone;
use Exception;

class DateValidator
{
    private DateTimeZone $timeZone;

    public function __construct()
    {
        $this->timeZone = new DateTimeZone('America/Bogota');
    }

    /**
     * Validate if a string is a valid date in Y-m-d format.
     */
    public function isValidDateFormat(string $date): bool
    {
        if (! preg_match('/^\d{4}-\d{2}-\d{2}$/', $date)) {
            return false;
        }

        $parts = explode('-', $date);

        return checkdate((int) $parts[1], (int) $parts[2], (int) $parts[0]);
    }

    /**
     * Validate or convert the date to the America/Bogota timezone.
     * Date must be in ISO 8601 format.
     *
     * @throws Exception If date is not in ISO 8601 format
     */
    public function validate(string|DateTime $date): DateTime
    {
        if ($date instanceof DateTime) {
            if ($date->getTimezone()->getName() !== $this->timeZone->getName()) {
                $date->setTimezone($this->timeZone);
            }

            return $date;
        }

        // Validate ISO 8601 format
        if (! preg_match('/^\d{4}-\d{2}-\d{2}T\d{2}:\d{2}:\d{2}(?:\.\d+)?(?:Z|[+-]\d{2}:?\d{2})?$/', $date)) {
            throw new Exception('Date must be in ISO 8601 format (e.g. 2025-12-31T23:59:59Z) but got: '.$date);
        }

        $dateObject = new DateTime($date);
        $dateObject->setTimezone($this->timeZone);

        return $dateObject;
    }

    /**
     * Get date in Y-m-d format
     */
    public function getDate(string|DateTime $date): string
    {
        $dateObject = $this->validate($date);

        return $dateObject->format('Y-m-d');
    }

    /**
     * Get time in H:i:s%z format
     */
    public function getTime(string|DateTime $date): string
    {
        $dateObject = $this->validate($date);

        return $dateObject->format('H:i:sP');
    }

    /**
     * Get DateTime object
     */
    public function getDateTime(string|DateTime $date): string
    {
        return $this->validate($date)->format('Y-m-d H:i:sP');
    }
}
