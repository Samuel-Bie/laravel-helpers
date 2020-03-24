<?php

if (!function_exists('percentage')) {
    function percentage($total, $partial)
    {
        return $partial * 100 / $total;
    }
}


if (!function_exists('getPercentageValue')) {
    function getPercentageValue($total, $percentage)
    {
        return $total * $percentage/100;
    }
}


