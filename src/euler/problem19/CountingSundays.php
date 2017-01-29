<?php

namespace euler\problem19;

/**
 * Euler Project - Problem 19
 *
 * Counting Sundays
 *
 * How many Sundays fell on the first of the month during the twentieth century (1 Jan 1901 to 31 Dec 2000)?
 *
 * A leap year occurs on any year evenly divisible by 4, but not on a century unless it is divisible by 400.
 * 1 Jan 1900 was a Monday.
 * Thirty days has September, April, June and November.
 * All the rest have thirty-one,
 * Saving February alone, which has twenty-eight, rain or shine. And on leap years, twenty-nine.
 *
 * @author Eduardo Llorens <ellorensc@gmail.com>
 * @version 1.0
 */
class CountingSundays
{
    private $startYear;
    private $endYear;

    /**
     * CountingSundays constructor.
     * @param $startYear
     * @param $endYear
     * @throws \Exception
     */
    public function __construct($startYear, $endYear)
    {
        if (!isset($startYear) || !isset($endYear)) {
            throw new \Exception();
        }

        $this->startYear = $startYear;
        $this->endYear = $endYear;
    }

    /**
     * Check if some year is leap.
     * @param $year
     * @return bool
     */
    private function isLeapYear($year)
    {
        return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
    }

    /**
     * Sundays felt on the first of the month during the twentieth century.
     * @return int
     */
    public function firstOfTheMonthSundays()
    {
        $sundays = 0;

        for ($i=$this->startYear; $i<=$this->endYear; $i++) {
            for ($j=1; $j<=12; $j++) {
                if (date('l', strtotime("$j/1/$i")) == "Sunday" ) {
                    $sundays++;
                }
            }
        }

        return $sundays;
    }
}
