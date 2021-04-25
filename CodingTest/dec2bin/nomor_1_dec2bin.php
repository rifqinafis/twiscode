<?php
function dec2bin($dec)
{
    $binStr = '';
    while ($dec >= 1) {
        $bin = $dec % 2;
        $dec = round($dec / 2, 0, PHP_ROUND_HALF_DOWN);
        $binStr .= $bin;
    }
    $binStr = strrev($binStr);
    return $binStr;
}
