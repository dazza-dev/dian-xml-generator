<?php

namespace DazzaDev\DianXmlGenerator\Models\Payroll\Earnings\Overtime;

class Overtime
{
    /**
     * Daytime overtime
     */
    private array $daytimes = [];

    /**
     * Nighttime overtime
     */
    private array $nighttimes = [];

    /**
     * Daytime Sunday or holiday overtime
     */
    private array $daytimeSundayHolidays = [];

    /**
     * Nighttime Sunday or holiday overtime
     */
    private array $nighttimeSundayHolidays = [];

    /**
     * Overtime constructor
     */
    public function __construct(array $data = [])
    {
        $this->initialize($data);
    }

    /**
     * Initialize overtime base data
     */
    private function initialize(array $data): void
    {
        if (isset($data['daytimes'])) {
            $this->setDaytimes($data['daytimes']);
        }

        if (isset($data['nighttimes'])) {
            $this->setNighttimes($data['nighttimes']);
        }

        if (isset($data['daytime_sunday_holidays'])) {
            $this->setDaytimeSundayHolidays($data['daytime_sunday_holidays']);
        }

        if (isset($data['nighttime_sunday_holidays'])) {
            $this->setNighttimeSundayHolidays($data['nighttime_sunday_holidays']);
        }
    }

    /**
     * Get daytimes
     */
    public function getDaytimes(): array
    {
        return $this->daytimes;
    }

    /**
     * Set daytimes
     */
    public function setDaytimes(array $daytimes): void
    {
        $this->daytimes = [];
        foreach ($daytimes as $daytime) {
            $this->daytimes[] = new Daytime($daytime);
        }
    }

    /**
     * Get nighttimes
     */
    public function getNighttimes(): array
    {
        return $this->nighttimes;
    }

    /**
     * Set nighttimes
     */
    public function setNighttimes(array $nighttimes): void
    {
        $this->nighttimes = [];
        foreach ($nighttimes as $nighttime) {
            $this->nighttimes[] = new Nighttime($nighttime);
        }
    }

    /**
     * Get daytime sunday holidays
     */
    public function getDaytimeSundayHolidays(): array
    {
        return $this->daytimeSundayHolidays;
    }

    /**
     * Set daytime sunday holidays
     */
    public function setDaytimeSundayHolidays(array $daytimeSundayHolidays): void
    {
        $this->daytimeSundayHolidays = [];
        foreach ($daytimeSundayHolidays as $daytimeSundayHoliday) {
            $this->daytimeSundayHolidays[] = new DaytimeSundayHoliday($daytimeSundayHoliday);
        }
    }

    /**
     * Get nighttime sunday holidays
     */
    public function getNighttimeSundayHolidays(): array
    {
        return $this->nighttimeSundayHolidays;
    }

    /**
     * Set nighttime sunday holidays
     */
    public function setNighttimeSundayHolidays(array $nighttimeSundayHolidays): void
    {
        $this->nighttimeSundayHolidays = [];
        foreach ($nighttimeSundayHolidays as $nighttimeSundayHoliday) {
            $this->nighttimeSundayHolidays[] = new NighttimeSundayHoliday($nighttimeSundayHoliday);
        }
    }

    /**
     * Get array representation
     */
    public function toArray(): array
    {
        return [
            'daytimes' => array_map(function (Daytime $daytime) {
                return $daytime->toArray();
            }, $this->getDaytimes()),
            'nighttimes' => array_map(function (Nighttime $nighttime) {
                return $nighttime->toArray();
            }, $this->getNighttimes()),
            'daytime_sunday_holidays' => array_map(function (DaytimeSundayHoliday $daytimeSundayHoliday) {
                return $daytimeSundayHoliday->toArray();
            }, $this->getDaytimeSundayHolidays()),
            'nighttime_sunday_holidays' => array_map(function (NighttimeSundayHoliday $nighttimeSundayHoliday) {
                return $nighttimeSundayHoliday->toArray();
            }, $this->getNighttimeSundayHolidays()),
        ];
    }
}
