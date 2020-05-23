<?php

use Carbon\Carbon;
use Illuminate\Support\Str;


/**
 *
 * Calculates the percentage of a value in another value
 *
 * @example
 * ```
 * echo percentage(1000,10); //returns 100
 * ```
 *
 *
 * percentage
 *
 * @param  float $total
 * @param  float $partial
 * @return float
 */
function percentage(float $total, float $partial): float
{
    return $partial * 100 / $total;
}


/**
 * Calculates the value percentage of a percentage
 * getPercentageValue
 *
 * @param  float $total
 * @param  float $percentage
 * @return float
 */
function getPercentageValue(float $total, float $percentage): float
{
    return $total * $percentage / 100;
}


/**
 * Generates and array of hours (strings) betweem to Carbon dates
 * hoursBetween
 *
 * @param  Carbon\Carbon $from
 * @param  Carbon\Carbon $to
 * @return array
 */
function hoursBetween(Carbon $from, Carbon $to): array
{
    $from = $from->startOfDay();
    $to = $to->endOfDay();
    $keys = [];
    for (;;) {
        array_push($keys, $from->format('H:i'));
        $from->addHour();
        if ($from->greaterThan($to)) {
            break;
        }
    }
    return $keys;
}


/**
 * Generates and array of days (strings) betweem to Carbon dates
 * hoursBetween
 *
 * @param  Carbon\Carbon $from
 * @param  Carbon\Carbon $to
 * @return array
 */
function daysBetween(Carbon $from, Carbon $to): array
{
    $from = $from->startOfDay();
    $to = $to->endOfDay();
    $keys = [];
    for (;;) {
        array_push($keys, $from->day);
        $from->addDay();
        if ($from->greaterThan($to)) {
            break;
        }
    }
    return $keys;
}

/**
 * Generates and array of weeks (strings) betweem to Carbon dates
 * hoursBetween
 *
 * @param  Carbon\Carbon $from
 * @param  Carbon\Carbon $to
 * @return array
 */
function weeksBetween(Carbon $from, Carbon $to): array
{
    $from = $from->startOfYear();
    $to = $to->endOfYear();
    $keys = [];
    for (;;) {
        array_push($keys, Str::ucfirst($from->week));
        $from->addYear();
        if ($from->greaterThan($to)) {
            break;
        }
    }
    return $keys;
}


/**
 * Generates and array of months (strings) betweem to Carbon dates
 * hoursBetween
 *
 * @param  Carbon\Carbon $from
 * @param  Carbon\Carbon $to
 * @return array
 */
function monthsBetween(Carbon $from, Carbon $to): array
{
    $from = $from->startOfMonth();
    $to = $to->endOfMonth();
    $keys = [];
    for (;;) {
        array_push($keys, Str::ucfirst($from->monthName));
        $from->addMonth();
        if ($from->greaterThan($to)) {
            break;
        }
    }
    return $keys;
}

/**
 * Generates and array of years (strings) betweem to Carbon dates
 * hoursBetween
 *
 * @param  Carbon\Carbon $from
 * @param  Carbon\Carbon $to
 * @return array
 */
function yearsBetween(Carbon $from, Carbon $to): array
{
    $from = $from->startOfYear();
    $to = $to->endOfYear();
    $keys = [];
    for (;;) {
        array_push($keys, Str::ucfirst($from->year));
        $from->addYear();
        if ($from->greaterThan($to)) {
            break;
        }
    }
    return $keys;
}
