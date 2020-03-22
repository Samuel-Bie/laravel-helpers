<?php

if (!function_exists('percentage')) {
    function percentage($total, $partial)
    {
        return $partial * 100 / $total;
    }
}
