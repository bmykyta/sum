<?php

namespace bmykyta\Sum;

/**
 * @package bmykyta\Sum
 */
class Sum
{
    public static function calculate(int|float $augend, int|float $addend): float|int
    {
        return $augend + $addend;
    }
}